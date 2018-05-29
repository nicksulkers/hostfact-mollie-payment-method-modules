# HostFact Mollie's payment methods as individual modules
Recently I've set up a trial of HostFact (https://www.hostfact.nl). I've used Mollie (https://www.mollie.nl) as payment service provider before and therefor was glad a module was included within HostFact.
Upon testing I found the client gets an option to pay through Mollie. Upon choosing Mollie options for the enabled payment methods appear.
Not quite the flow as I'd like it.

I wanted to remove the "Mollie choice" from this flow and present the client directly with actual payment methods. To achieve this I've created a new module for each of Mollie's payment methods.

***Each module requires the by default included Mollie module to be present and activated as the new classes extend the Mollie class. The availability however can be set to Disabled, to hide it from customers***

## Advantages
- Less confusing for clients
- Now possible to add different transaction costs or discounts to specific payment methods instead of a single setting for all Mollie payment methods
- Possible to activate specific payment methods instead of all that are allowed on your Mollie account

## Installation
1. Download and extract all desired modules and images to the payment methods directory, by default: "/klantenpaneel/betalen/".
2. In the backoffice click on the "Instellingen" menu and click on "Betaalmethoden". You can add the individual payment methods here.

## FAQ
### Why aren't there images for all modules included?
Any missing image is already present by default. Existing modules may provide other implementations (through other payment service providers) for the same payment methods. There is a default module to implement paypal and therefor a image is present. If you use the Mollie_paypal module to accept paypal payments, the same image will be used.
### Why are the texts dutch
I'm dutch and so is my installation. I am currently unaware of a way to provide a multilanguage construction within HostFact. Having said that, I've only started using HostFact the day I wrote this very text. If you read this I have yet to find a good way to do so.
Since Mollie is a dutch payment service provider, I doubt any non-dutch person will ever use this. Nevertheless should you require any assistance on setting up a english version, let me know and I'd be happy to help.
### I've read your entire FAQ but my question is still unanswered!
Well send me a message and I'll give you the best answer I can as soon as I can. If it's a very good question I'll even consider adding it to the list.

## Copyright and License
Copyright 2017 Nick sulkers

Code released under the MIT License.
