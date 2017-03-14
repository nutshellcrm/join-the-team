<?php

$firstNames = ['Andy', 'Andrew', 'Dawn', 'Joe', 'Katherine', 'Austin', 'Sally', 'Sarah', 'Sara', 'Erika', 'Ian', 'Guy', 'Lindsay', 'Mike', 'Chris', 'Karsten', 'Dylan', 'Elaine', 'Don', 'Dan', 'Kyle', 'Greg', 'Christina', 'Rebekka', 'Matt', 'Ben', 'Asya', 'Brian', 'Ryan', 'Flavio', 'Flav'];

$lastNames = ['Washington', 'Jefferson', 'Jackson', 'Lincoln', 'Hamilton', 'Monroe', 'Ford', 'Nixon', 'Clinton', 'Reagan', 'Garfield', 'Obama', 'Bush', 'Carter', 'Truman', 'Kennedy', 'Johnson', 'Roosevelt', 'Coolidge', 'Taft', 'Eisenhower', 'Wilson', 'Fillmore', 'Adams', 'Polk'];

$currentPage = [];
$pageNum = 1;
for ($i=0; $i < 25; $i++) {
  $name = $firstNames[array_rand($firstNames)].' '.$lastNames[array_rand($lastNames)];
  $payload = [
    'name' => $name,
    'email' => (rand() % 2) ? null : strtolower(str_replace(' ', '', $name)).'@example.com',
    'signup_date' => implode('-', [rand(2000, 2017), rand(1, 12), rand(1, 28)]),
  ];

  // maybe some people shouldn't even have an email key…
  if ($pageNum > 3 && $payload['email'] == null) unset($payload['email']);

  $currentPage[] = $payload;

  if (count($currentPage) == 5) {
    $dir = dirname(__FILE__).'/../people/'.$pageNum;
    @mkdir($dir);
    file_put_contents(
      $dir.'/index.json',
      json_encode($currentPage, JSON_PRETTY_PRINT)
    );
    $currentPage = [];
    $pageNum++;
  }
}

// add a few empty pages
for ($i=$pageNum; $i <= 10; $i++) {
  $dir = dirname(__FILE__).'/../people/'.$i;
  @mkdir($dir);
  file_put_contents(
    $dir.'/index.json',
    json_encode([], JSON_PRETTY_PRINT)
  );
}
