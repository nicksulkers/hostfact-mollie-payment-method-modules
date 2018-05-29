# HostFact mollie's payment methods as individual modules
Recently I've set up a trial of HostFact (https://www.hostfact.nl/). I've used mollie (https://www.mollie.nl) as payment service provider before and therefor was glad a module was included within HostFact.
Upon testing I found the client gets an option to pay through mollie. Upon choosing mollie options for the enabled payment methods appear.
Not quite the flow as I'd like it.

I wanted to remove the "mollie choice" from this flow and present the client directly with actual payment methods. To achieve this I've created a new module for each of mollie's payment methods.

***Each module requires the by default included mollie module to be present (may be deactivated) as the new classes extend the mollie class***

## Advantages
- Less confusing for clients
- Now possible to add different transaction costs or discounts to specific payment methods instead of a single setting for all mollie payment methods
- Possible to activate specific payment methods instead of all that are allowed on your mollie account

## Installation
1. Download and extract all desired modules and images to the payment methods directory (In my case /klantenpaneel/betalen)
2. Activate and configure the modules in the control panel (/Pro/paymentmethods.php)

## FAQ
### Why aren't there images for all modules included?
Any missing image is already present by default. Existing modules may provide other implementations (through other payment service providers) for the same payment methods. There is a default module to implement paypal and therefor a image is present. If you use the mollie_paypal module to accept paypal payments, the same image will be used.
### Why are the texts dutch
I'm dutch and so is my installation. I am currently unaware of a way to provide a multilanguage construction within HostFact. Having said that, I've only started using HostFact the day I wrote this very text. If you read this I have yet to find a good way to do so.
Since mollie is a dutch payment service provider, I doubt any non-dutch person will ever use this. Nevertheless should you require any assistance on setting up a english version, let me know and I'd be happy to help.
### I've read your entire FAQ but my question is still unanswered!
Well send me a message and I'll give you the best answer I can as soon as I can. If it's a very good question I'll even consider adding it to the list.

## Copyright and License
Copyright 2017 Nick sulkers

Code released under the MIT License.
