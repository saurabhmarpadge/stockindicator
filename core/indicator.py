import ystockquote,pandas,operator,math,random,numpy,sys,csv,json
from deap import algorithms, base, creator, tools, gp
from pprint import pprint
class AutoVivification(dict):
	def __getitem__(self, key):
		return eval(dict.__getitem__(self,key), self, {})
past_data = AutoVivification()
past_data = ystockquote.get_historical_prices(sys.argv[1],'2017-01-03','2017-03-01')
weekdays = pandas.Series(pandas.bdate_range('20170103 09:10:12', periods=15))
dates = weekdays.dt.strftime('%Y-%m-%d')
p = 41
i = 0
open_val = []
close_val = []
low_val = []
high_val = []
volume_val = []
while i<(p-1):
	open_val.append(eval(past_data[dates[i]]['Open']))
	close_val.append(eval(past_data[dates[i]]['Close']))
	low_val.append(eval(past_data[dates[i]]['Low']))
	high_val.append(eval(past_data[dates[i]]['High']))
	volume_val.append(eval(past_data[dates[i]]['Volume']))
	i = i + 1
close_val.append(eval(past_data[dates[i]]['Close']))
print open_val
rsi_n = 40
rsi_i = 0
avg_gain = 0
avg_loss = 0
while (rsi_i < rsi_n):
    change = close_val[rsi_i + 1] - close_val[rsi_i]
    if (change < 0):
        avg_loss = avg_loss + change
    else:
        avg_gain = avg_gain + change
    rsi_i = rsi_i + 1
avg_gain = avg_gain / 40
avg_loss = abs(avg_loss) / 40
rs = avg_gain / avg_loss
rsi = (100 - (100 / (1 + rs)))
if (rsi >= 70):
    rsi = -1
elif (rsi <= 30):
    rsi = 1
else:
    rsi = 0
def protectedDiv(left, right):
    try:
        return left / right
    except ZeroDivisionError:
        return 1
pset = gp.PrimitiveSet("MAIN", 5)
pset.addPrimitive(operator.add, 2)
pset.addPrimitive(operator.sub, 2)
pset.addPrimitive(operator.mul, 2)
pset.addPrimitive(protectedDiv, 2)
pset.addPrimitive(operator.neg, 1)
pset.addPrimitive(math.cos, 1)
pset.addPrimitive(math.sin, 1)
pset.addEphemeralConstant("rand101", lambda: random.randint(-1,1))
pset.renameArguments(ARG0='open')
pset.renameArguments(ARG1='close')
pset.renameArguments(ARG2='low')
pset.renameArguments(ARG3='high')
pset.renameArguments(ARG4='volume')
creator.create("FitnessMin", base.Fitness, weights=(-1.0,))
creator.create("Individual", gp.PrimitiveTree, fitness=creator.FitnessMin)
toolbox = base.Toolbox()
toolbox.register("expr", gp.genHalfAndHalf, pset=pset, min_=1, max_=9)
toolbox.register("individual", tools.initIterate, creator.Individual, toolbox.expr)
toolbox.register("population", tools.initRepeat, list, toolbox.individual)
toolbox.register("compile", gp.compile, pset=pset)
def evalSymbReg(individual):
    func = toolbox.compile(expr=individual)
    abs_error = 0
    j = 40
    k = 0
    while k<j:
        error = abs(func(open_val[k],close_val[k],low_val[k],high_val[k],volume_val[k]) - close_val[k+1])
        k = k + 1
        abs_error = abs_error + error
    return abs_error,
toolbox.register("evaluate",evalSymbReg)
toolbox.register("select", tools.selTournament, tournsize=3)
toolbox.register("mate", gp.cxOnePoint)
toolbox.register("expr_mut", gp.genFull, min_=0, max_=9)
toolbox.register("mutate", gp.mutUniform, expr=toolbox.expr_mut, pset=pset)
toolbox.decorate("mate", gp.staticLimit(key=operator.attrgetter("height"), max_value=17))
toolbox.decorate("mutate", gp.staticLimit(key=operator.attrgetter("height"), max_value=17))
def main():
	random.seed(318)
	pop = toolbox.population(n=300)
	hof = tools.HallOfFame(1)
	stats_fit = tools.Statistics(lambda ind: ind.fitness.values)
	stats_size = tools.Statistics(len)
	mstats = tools.MultiStatistics(fitness=stats_fit, size=stats_size)
	mstats.register("avg", numpy.mean)
	mstats.register("std", numpy.std)
	mstats.register("min", numpy.min)
	mstats.register("max", numpy.max)
	pop, log = algorithms.eaSimple(pop, toolbox, 0.6, 0.1, 3, stats=mstats,halloffame=hof, verbose=True)
	function = toolbox.compile(expr=hof[0])
	obtained = function(open_val[p-2],close_val[p-2],low_val[p-2],high_val[p-2],volume_val[p-2])
	expected = close_val[p-1]
	difference = abs(obtained-expected)
	previous_day_price = open_val[p-2]
	gp_says=obtained-previous_day_price
	todays_price = (float)(ystockquote.get_price(sys.argv[1]))
	reality_says = todays_price - expected
	jpass = [rsi,gp_says,reality_says]
	print json.dumps(jpass)
	return pop, log, hof
if __name__ == "__main__":
    main()
