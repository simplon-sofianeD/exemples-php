<?php

$articles=[
  [
      "title"=>"my first article",
      "content"=>"my first article content"
  ],
  [
      "title"=>"my 2nd article",
      "content"=>"my 2nd article content"
  ],
  [
      "title"=>"my 3th article",
      "content"=>"my 3th article content"
  ],
];

if( isset($_GET['articleId']))
    echo json_encode($articles[$_GET['articleId']]);
else
    echo json_encode($articles);

?>