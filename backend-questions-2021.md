# Nutshell Backend Interview Questions (2021)

Below is a list of 8 questions that we ask all backend candidates to answer. These aren’t meant to be trick questions, and some are purposefully a bit opened ended to help orient a discussion during subsequent interviews.

To help set expectations, we believe this should take under 2-3 hours to complete. We understand that you have other responsibilities, so if you think you’ll need more than 3-4 days, just let us know when you expect to send a reply.

You might find [gist.github.com](https://gist.github.com/) a convenient way to send us your work.

### Questions

  - We use “Feature Flags” to release code which will only run for certain users. Can you explain how this process might work and how it could be implemented?

  - Can you briefly explain a multi-tenant data storage architecture, and some pros/cons?

  - What is “PSR”? What is “PSR-7”?

  - Can you explain strict types in PHP, including how to enable and use them?

  - Can you describe what this code is doing? Can you identify any issues it may encounter in production?

```php
    public function canAccess(string $cacheId): bool {
        $memcache = $this->getCache();

        $attempts = json_decode($memcache->get($cacheId), true) ?: [];
        if (count($attempts) >= $this->limit) {
            return false;
        }

        return true;
    }

    public function recordRequest(string $cacheId): void {
        $memcache = $this->getCache();

        $attempts = json_decode($memcache->get($cacheId), true) ?: [];
        $attempts[] = time();
        $memcache->set($cacheId, json_encode($attempts), $this->ttl);
    }
```

  - `git status` reports “Your branch and 'origin/feature' have diverged.” What happened and how do you handle this situation?

  - Our Database Object–relational mapping (ORM) uses a shared cache to store table/column metadata for performance. When a new release introduces a change, the cache will need to be cleared and re-written to contain the new data. During a deployment, old code and new code will be running simultaneously. If the cache is cleared on deploy, the running old code will write old cache data. How do you handle this?

- We use GitHub for code review so we can leave inline comments and provide written feedback for teammates. Pretending the following code was submitted as a pull request, what kind of feedback would you leave? What do you think could be improved, and how would you devlier that feedback?

```php
/**
 * This made up function takes an array of id/type pairs and attempts to look up corresponding
 * models from the database and return them as an array. Should throw an exception if one of the
 * filter params does not find a corresponding model
 *
 * We can assume the format of the filter params are correct (integer for id, string for type)
 *
 * An example input:
 * [
 *	['id' => 13, 'type' => 'tags'],
 * 	['id' => 11, 'type' => 'tags'],
 * 	['id' => 2, 'type' => 'sources'],
 * ]
 *
 * @param  string $parameters - Array of filter params
 * @return array              - List of models
 */
function getModelsFromFilterParams(array $filterParams) {
	$error = false;
	$models = [];
	foreach ($params as $param) {
		// This function looks up a model by id and type – will return
		// the model if found, otherwise null.
		$model = Example::getModelByIdAndType($param['id'], $param['type']);
		if (!$model) {
			$error = $param;
		}

		$models = array_push($models, $model);
	}

	if ($error) {
		throw new Exception("Invalid filter – could not find model with id {$param['id']} of type {$param['type']}");
	}

	return $models;
}