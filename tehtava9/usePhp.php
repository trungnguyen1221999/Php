<?php
// Dữ liệu trending với ảnh
$trendingItems = [
  ["title"=>"READ1","views"=>"12.1M","badge"=>"New","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.","img"=>"cate-01.jpg"],
  ["title"=>"READ2","views"=>"9.5M","badge"=>"Up","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.2","img"=>"cate-02.jpg"],
  ["title"=>"READ3","views"=>"8.3M","badge"=>"Up","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.3","img"=>"cate-03.jpg"],
  ["title"=>"READ4","views"=>"7.2M","badge"=>"Up","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.4","img"=>"cate-04.jpg"],
  ["title"=>"READ5","views"=>"7.2M","badge"=>"Up","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.5","img"=>"cate-05.jpg"],
];

// Dữ liệu new với ảnh
$newItems = [
  ["title"=>"READ1","views"=>"12.1M","badge"=>"New","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.1","img"=>"cate-01.jpg"],
  ["title"=>"READ2","views"=>"11.1M","badge"=>"New","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.2","img"=>"cate-02.jpg"],
  ["title"=>"READ3","views"=>"10.2M","badge"=>"New","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.3","img"=>"cate-03.jpg"],
  ["title"=>"READ4","views"=>"9.4M","badge"=>"New","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.4","img"=>"cate-04.jpg"],
  ["title"=>"READ5","views"=>"9.4M","badge"=>"New","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.5","img"=>"cate-05.jpg"],
];

// Dữ liệu genres với ảnh
$genres = [
  "Horror" => [
    ["title"=>"READ1","views"=>"12.1M","badge"=>"End","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 1","img"=>"cate-06.jpg"],
    ["title"=>"READ2","views"=>"9.5M","badge"=>"End","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 2","img"=>"cate-07.jpg"],
    ["title"=>"READ3","views"=>"8.2M","badge"=>"End","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 3","img"=>"cate-08.jpg"],
    ["title"=>"READ4","views"=>"7.1M","badge"=>"End","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 4","img"=>"cate-09.jpg"],
    ["title"=>"READ5","views"=>"7.1M","badge"=>"End","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 5","img"=>"cate-06.jpg"],
  ],
  "Sports" => [
    ["title"=>"READ1","views"=>"12.1M","badge"=>"End","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 1","img"=>"cate-07.jpg"],
    ["title"=>"READ2","views"=>"11.5M","badge"=>"End","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 2","img"=>"cate-08.jpg"],
    ["title"=>"READ3","views"=>"9.8M","badge"=>"End","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 3","img"=>"cate-09.jpg"],
    ["title"=>"READ4","views"=>"8.2M","badge"=>"End","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 4","img"=>"cate-06.jpg"],
    ["title"=>"READ5","views"=>"8.2M","badge"=>"End","auth"=>"AUTH","desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 5","img"=>"cate-07.jpg"],
  ]
];

// Function render item với ảnh
function renderItems($items) {
  foreach($items as $index=>$item) {
    $i = $index+1;
    echo "
      <section class='trending__item trending__item$i'>
        <section class='trending__img' style='background: url({$item['img']}) no-repeat center center/cover;'>
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
?>
