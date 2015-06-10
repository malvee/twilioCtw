# Download the Python helper library from twilio.com/docs/python/install
from twilio.rest import TwilioRestClient
 
# Your Account Sid and Auth Token from twilio.com/user/account
account_sid = "ACf3bff83741dbbac71cc86f19e4c78884"
auth_token  = "ec08fa98cd88723f9798ec9d82df60e7"
client = TwilioRestClient(account_sid, auth_token)
 
call = client.calls.create(
    to="+447949319540",
    from_="+441702806342", url="http://twimlets.com/holdmusic?Bucket=com.twilio.music.ambient")
print call.sid