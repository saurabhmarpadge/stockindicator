import tweepy,sys

from textblob import TextBlob

consumer_key = '8x9qorUFn714MYFaflVhtdUAu'
consumer_secret = 'q8NCMHYGBZQX3ZGqO9P1UiRLZpOfq6utkGFuoiph2Lezwnm7FP'

access_token = '826068351910715392-OjrDZjO8Zg2vfOQz7ODzUQCGOB5HUpS'
access_token_secret = 'rrzR2e9iXhbmkRjxfkqtPLLo0FGBfeKgNSWRDc1vDsmFk'

auth = tweepy.OAuthHandler(consumer_key, consumer_secret)
auth.set_access_token(access_token, access_token_secret)

def semantic(quote,limit):
    api = tweepy.API(auth)
    word = quote
    public_tweets = api.search(word, count=limit)
    positive, null = 0, 0
    for tweet in public_tweets:
        analysis = TextBlob(tweet.text)
        if analysis.subjectivity ==0:
            null += 1
            next
        if analysis.polarity > 0:
            positive += 1

    if positive > ((100-null)/2):
        return 1
    else:
        return 0

if __name__ == '__main__':
    print(semantic(sys.argv[1],100))
    #print(json.dumps(semantic(sys.argv[1],100)))

'''
for tweet in public_tweets:
    print(tweet.text)
    analysis = TextBlob(tweet.text)
    print(analysis.sentiment)
    print(analysis.sentiment)'''
