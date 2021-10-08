# Nutshell Software Engineer Take Home Questions

To start, **we ask all candidates** to answer the following questions. A paragraph or two each is probably about right:

1. What's your proudest achievement? It can be from work, school, a side project, or something unrelated to tech. We're interested in knowing about what you think is noteworthy and motivating.
2. Tell us about an interesting school or work-related book, article, or presentation that you saw recently. Tell us why, give us a recommendation, and sell us on it!
3. From what you’ve seen on our web site, write about who Nutshell’s customers are, and what problems they’re looking to solve.
4. Tell us about the last time you had to reconsider a closely-held opinion. What caused your change in thinking?

Along with the above questions, we have one take-home question to answer - for this question, we recommend writing your answer in whatever language you’re most comfortable in.

To help set expectations, we believe this should take under 2-3 hours to complete. We understand that you have other responsibilities, so if you think you’ll need more than 3-4 days, just let us know when you expect to send a reply!

You might find [gist.github.com](https://gist.github.com/) a convenient way to send us your work.

---

## REST API Client

Many Nutshell components communicate with web servers for their data. Here you’ll interact with a REST API that returns information about people. This API is paginated, so you’ll need to make multiple requests to gather all people.

The URL endpoints look like:

- http://join.nutshell.com/people/1/
- http://join.nutshell.com/people/2/
- http://join.nutshell.com/people/3/
- (... etc.)

When you go beyond the number of full pages, you’ll receive an empty array.

Each page looks like this:

```
[
  {"name": "Andy Fowler", "email": null, "signup_date": "2017-01-03"},
  {"name": "Andrew Sardone", "email": "andrew@example.com", "signup_date": "2017-01-02"},
  [ ... and others ...]
]
```

**Write some code that prints the 5 newest people (by signup date) that have a non-null email address.**
