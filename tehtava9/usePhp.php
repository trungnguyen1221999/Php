<?php
// Dữ liệu trending
$trendingItems = [
  ["title"=>"READ1","views"=>"12.1M","badge"=>"New","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit."],
  ["title"=>"READ2","views"=>"9.5M","badge"=>"Up","auth"=>"AUTH","desc"=>"Nội dung cho READ2"],
  ["title"=>"READ3","views"=>"8.3M","badge"=>"Up","auth"=>"AUTH","desc"=>"Nội dung cho READ3"],
  ["title"=>"READ4","views"=>"7.2M","badge"=>"Up","auth"=>"AUTH","desc"=>"Nội dung cho READ4"],
];

// Dữ liệu new
$newItems = [
  ["title"=>"READ1","views"=>"12.1M","badge"=>"New","auth"=>"AUTH","desc"=>"Mô tả READ1"],
  ["title"=>"READ2","views"=>"11.1M","badge"=>"New","auth"=>"AUTH","desc"=>"Mô tả READ2"],
  ["title"=>"READ3","views"=>"10.2M","badge"=>"New","auth"=>"AUTH","desc"=>"Mô tả READ3"],
  ["title"=>"READ4","views"=>"9.4M","badge"=>"New","auth"=>"AUTH","desc"=>"Mô tả READ4"],
];

// Dữ liệu genres
$genres = [
  "Horror" => [
    ["title"=>"READ1","views"=>"12.1M","badge"=>"End","auth"=>"AUTH","desc"=>"Horror story 1"],
    ["title"=>"READ2","views"=>"9.5M","badge"=>"End","auth"=>"AUTH","desc"=>"Horror story 2"],
    ["title"=>"READ3","views"=>"8.2M","badge"=>"End","auth"=>"AUTH","desc"=>"Horror story 3"],
    ["title"=>"READ4","views"=>"7.1M","badge"=>"End","auth"=>"AUTH","desc"=>"Horror story 4"],
  ],
  "Sports" => [
    ["title"=>"READ1","views"=>"12.1M","badge"=>"End","auth"=>"AUTH","desc"=>"Sports story 1"],
    ["title"=>"READ2","views"=>"11.5M","badge"=>"End","auth"=>"AUTH","desc"=>"Sports story 2"],
    ["title"=>"READ3","views"=>"9.8M","badge"=>"End","auth"=>"AUTH","desc"=>"Sports story 3"],
    ["title"=>"READ4","views"=>"8.2M","badge"=>"End","auth"=>"AUTH","desc"=>"Sports story 4"],
  ]
];

// Function render item
function renderItems($items) {
  foreach($items as $index=>$item) {
    $i = $index+1;
    echo "
      <section class='trending__item trending__item$i'>
        <section class='trending__img'>
          <h3 class='trending__item--heading'>{$item['title']}</h3>
          <p class='trending__item--views'>{$item['views']}</p>
          <p class='badge'>{$item['badge']}</p>
        </section>
        <section class='trending__content'>
          <h3 class='trending-content__item--heading'>{$item['title']}</h3>
          <p class='trending-content__item--auth'>{$item['auth']}</p>
          <p class='trending-content__item--desc'>{$item['desc']}</p>
        </section>
      </section>
    ";
  }
}
