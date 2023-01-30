# Your Account SID from twilio.com/console
account_sid = "AC2760c6ebca322afed2935a3b37d2992e"
# Your Auth Token from twilio.com/console
auth_token  = "0b06eb88fb69651a3abceec28c3a8e7a"
import twilio
import twilio.rest

try:
    client = twilio.rest.TwilioRestClient(account_sid, auth_token)

    message = client.messages.create(
        body="Hello World",
        to="+919573649488",
        from_="+919652635479"
    )
except twilio.TwilioRestException as e:
    print(e)