<?php include('includes/header.php');?>
<?php include('includes/sidebarHead.php');?>

<h1 class="page-header">How it works</h1>


<div class="container">
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#menu1">Genetic Algorithm</a></li>
    <li><a data-toggle="pill" href="#menu2">RSI</a></li>
    <li><a data-toggle="pill" href="#menu3">Twitter</a></li>
  </ul>

  <div class="tab-content">

    <div id="menu1" class="tab-pane fade in active">
      <h3>Genetic Algorithm</h3>

        <p><strong>How Genetic Algorithms Work</strong><br /><br />Genetic algorithms are created mathematically using vectors, which are quantities that have direction and magnitude. Parameters for each trading rule are represented with a one-dimensional vector that can be thought of as a chromosome in genetic terms. Meanwhile, the values used in each parameter can be thought of as genes, which are then modified using natural selection.</p>
        <p>For example, a trading rule may involve the use of parameters like Moving Average Convergence-Divergence (MACD),Exponential Moving Average (EMA) and Stochastics. A genetic algorithm would then input values into these parameters with the goal of maximizing net profit<. Over time, small changes are introduced and those that make a desirably impact are retained for the next generation.</p>
        <p>There are three types of genetic operations that can then be performed:</p>
        <ul style="list-style-type:disc; padding-left:10px;"><li>&nbsp&nbspCrossovers represent the reproduction and biological crossover seen in biology, whereby a child takes on certain characteristics of its parents.</li>
        <li>&nbsp&nbspMutations represent biological mutation and are used to maintain genetic diversity from one generation of a population to the next by introducing random small changes.</li>
        <li>&nbsp&nbspSelections are the stage at which individual genomes are chosen from a population for later breeding (recombination or crossover).</li><br>
        </ul><p>These three operators are then used in a five-step process:</p>
        <ol><li>Initialize a random population, where each chromosome is <em>n</em>-length, with <em>n</em> being the number of parameters. That is, a random number of parameters are established with <em>n </em>elements each.</li>
        <li>Select the chromosomes, or parameters, that increase desirable results (presumably net profit).</li>
        <li>Apply mutation or crossover operators to the selected parents and generate an offspring.</li>
        <li>Recombine the offspring and the current population to form a new population with the selection operator.</li>
        <li>Repeat steps two to four.</li>
        </ol><p>Over time, this process will result in increasingly favorable chromosomes (or, parameters) for use in a trading rule. The process is then terminated when a stopping criteria is met, which can include running time, fitness, number of generations or other criteria.
</p>
    </div>
    <div id="menu2" class="tab-pane fade">

      <h3>Relative Strength Index</h3>
       <img class="img-thumbnail" src="img/RSI.gif" alt="RSI">
       <br>
      <p>&nbsp&nbsp&nbsp&nbspThe relative strength index (RSI) is a technical indicator used in the analysis of financial markets. It is intended to chart the current and historical strength or weakness of a stock or market based on the closing prices of a recent trading period. The indicator should not be confused with relative strength.
      </p>
      <p>&nbsp&nbsp&nbsp&nbspThe RSI is classified as a momentum oscillator, measuring the velocity and magnitude of directional price movements. Momentum is the rate of the rise or fall in price. The RSI computes momentum as the ratio of higher closes to lower closes: stocks which have had more or stronger positive changes have a higher RSI than stocks which have had more or stronger negative changes.
      </p>
      <p>&nbsp&nbsp&nbsp&nbspThe RSI is most typically used on a 14-day timeframe, measured on a scale from 0 to 100, with high and low levels marked at 70 and 30, respectively. Shorter or longer timeframes are used for alternately shorter or longer outlooks. More extreme high and low levels—80 and 20, or 90 and 10—occur less frequently but indicate stronger momentum.
      </p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Twitter Sentiment analytics in the financial markets</h3><br />



      <p>&nbsp&nbsp&nbsp&nbspSentiment analysis can use natural language processing, artificial intelligence, text analysis and computational linguistics to identify the attitude of a writer with respect to a topic. It’s an important cornerstone of behavioral finance, where theorists believe that markets are irrational and that asset prices are driven by human emotion (e.g., fear, greed, hope and overconfidence, among others). With the growth in global conversation on social media - Twitter in particular - where a vast amount of real-time market conversation occurs on a daily basis, academics and practitioners have been studying and measuring the global conversation to understand if it can meaningfully impact markets. Most concur that Twitter sentiment is correlated to asset price moves, but the debate has been about the predictive nature of Tweets on price. Well, the results are in and the early movers in this space are seeing success.</p>


      <p>&nbsp&nbsp&nbsp&nbspA number of firms are active in this area, including Bloomberg, that has integrated company-based sentiment, as well as Tweet velocity (an indication of volatility), into their social analytics solution on the Terminal. For this post, we’ll dig into three firms who focus on analyzing sentiment at the ticker level - PsychSignal, iSentium and Social Market Analytics.</p>

      </div>
  </div>
</div>



<?php include('includes/sidebarFoot.php');?>
<?php include('includes/footer.php');?>
