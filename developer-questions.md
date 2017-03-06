# Nutshell Developer Take Home Project

We recommend writing answers in whatever language you’re most comfortable in. Like our own code, we expect testing instructions: whether it’s an automated test framework, or simple manual steps.

You might find [gist.github.com](https://gist.github.com/) a convenient way to send us your work.

---

## `flattener`

**Write some code that will flatten an array of arbitrarily nested arrays of values into a flat array of values.** For example, `flattener([[1,2,[3]],4])` would return `[1,2,3,4]`.

Automated tests that illustrate how ensure the correctness of your solution are ideal, but if you don't include them, give us a decent writeup and some of the input cases you used.

Here are a few test cases to make sure you have the right idea:

```
input: [[1,2,3],4], output: [1,2,3,4]
input: [[1,2,[3]],4], output: [1,2,3,4]
input: [[1,[[2]],[3]],4], output: [1,2,3,4]
```

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
  [ ... and many others ...]
]
```

**Write some code that prints the 5 newest people (by signup date) that have a non-null email address.**
