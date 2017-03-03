# Join us and build beautiful software at Nutshell.

At [Nutshell](https://www.nutshell.com/), we’re building beautiful software to help small businesses grow. We’re looking for software developers and designers to join our team.

For software engineering candidates, we kick off the interview process with a few questions via email. We think that this is a more fair and effective way to understand your technical skills, as compared to an in-person whiteboard interview. (We didn’t invent this, though — [we copped the idea from Intercom](https://blog.intercom.com/how-we-hire-engineers-part-1/)!)

We recommend writing answers in whatever language you’re most comfortable in. Like our own code, we expect testing instructions: whether it’s an automated test framework, or simple manual steps.

You might find [gist.github.com](https://gist.github.com/) a convenient way to send us your work. **You can email us at [jobs@nutshell.com](mailto:jobs@nutshell.com) to get things started.**

To help set expectations, we believe this should take under 3 hours to complete. We understand that you have other responsibilities, so if you think you’ll need more than 3-4 days, just let us know when you expect to send a reply.

On our end, we’ll commit to getting back to you in 2-3 business days.

---

1. What is your proudest achievement? It can be from work, a side project, or something unrelated to tech. We're interested in knowing about what you think is noteworthy and motivating. A paragraph or two is fine!
2. Tell us about an interesting technical book, article, or presentation that you saw recently. Tell us why, give us a recommendation!
3. From what you’ve seen on our web site, write a paragraph about who Nutshell’s customers are, and what problems they’re looking to solve.
4. Write some code that will flatten an array of arbitrarily nested arrays of values into a flat array of values. For example, `flattener([[1,2,[3]],4])` would return `[1,2,3,4]`.
    - Automated tests that illustrate how ensure the correctness of your solution are ideal, but if you don't include them, give us a decent writeup and some of the input cases you used.
    - Here are a few test cases to make sure you have the right idea:

        ```
        input: [[1,2,3],4], output: [1,2,3,4]
        input: [[1,2,[3]],4], output: [1,2,3,4]
        input: [[1,[[2]],[3]],4], output: [1,2,3,4]
        ```

5. Many Nutshell components communicate with web servers for their data. Here you’ll interact with a REST API that returns information about people. This API is paginated, so you’ll need to make multiple requests to gather all people.
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
  [ ... and many others ...]
]
```
**Write some code that prints the 5 newest people (by signup date) that have a non-null email address.**
