# Nutshell Design Take Home Project

For product design candidates, we kick off the interview process with a few questions via email. This is actually for two reasons:

1. We’d like to see the first draft of how you’d solve for a complex UI.
2. Even more, it’ll give us a chance to see how we all interact and discuss work as a group when it comes to design process.

Here’s a quick spec for an interface that we already have deployed on web, iOS, and Android. The ‘deliverable’ here is a collection of wireframes that outline how the user accomplishes a task. To set expectations, we think this should take under 3-4 hours.

## Feature: Nutshell Mobile Activity Scheduling

This outlines an interface for a user to schedule an upcoming meeting with a customer on a phone-sized device. You can assume that the Nutshell app has a global `Create` button, that has a picker, including an `Activity` button, which launches this new UI.

Here are the tasks that the user needs to accomplish:

- Schedule an upcoming meeting for next Thursday, at 2pm with a person already in your CRM
- Activities have a basic name, as well as a “type” which is picked pre-configured list of things like “Phone call,” “Meeting,” etc.
- Set a start date and time for the event
- The customer to be met with should be selectable from a list (of potentially thousands).
- It should be possible to add additional customers to the meeting (i.e. a customer’s boss)
- Include an internal note of a few things to remember to discuss
- Indicate that this event will be automatically pushed to the user’s Google Calendar
- It should also be possible to push a calendar invitation to the customer participants of this activity. The critical issue here is that some of the “internal notes” associated with this activity shouldn’t be pushed to the customer. When an invitation is sent, it should be clear what data will and won’t be sent to the customer.

We’re deliberately refraining from including screenshots of how we’ve (partially) solved this problem in our current apps, to make this a scenario of how you’d run with a design spec on a greenfield project.

For the sake of this project, a low-fi starting point that walks through the various states, modes, and user interactions of this interface is probably better than a high-polish designed UI.

We’re really just hoping to get a stronger sense on how we’d all collaborate on a project, and how you go about solving complex problems. So if you'd like to come into the office and work on this, or start with an introductory phone call, we’re open!
