<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
</head>
<body>
<?php
  include_once('header.php');
  ?>

<div class = "catalogue_title">
    <div class = "_contain">
        <div class = "symbol"><i class="fa fa-shopping-cart"></i></i></div>
        <h1>Blog</h1>
    </div>
</div>
<div class = "blog_product">
    <div class = "_contain">
        <div class="image">
            <img src = "./img/blog_0.png"/>
        </div>
        <div class = "content">
            <div class = "content_top">
                <h3>Latest news</h3>
                <br>
                <h1>Home Office Trends for 2020-2021</h1>
                <br>
                <p>The COVID-19 pandemic has changed the way many of us work. Instead of commuting to an office building, many employees are working from home. If your previously temporary setup has turned into a long-term position, you may be ready to create a permanent home office.</p>
                <button><a href = ""><a>Read more</a></button>
            </div>
        </div>

    </div>
</div>

<section class="blog_gallery">
    <div class="content">
      <div class="list">
        <div class="item">
          <img src="./img/blog_1.png" />
          <div class="info">
            <h3>How High Should Your Office Desk Chair Be?</h3>
            <p>Whether you are shopping for a new office chair or trying to fine-tune your current chair’s position to improve comfort, your office chair’s height is the most important part of creating an ergonomic workstation. Your chair and desk are a unified team, and they both must fit you to optimize comfort. It’s important to determine the correct…</p>
            <div class = "_btn"><button><a href = ""><a>Read more</a></button></div>
          </div>
        </div>
        <div class="item">
            <img src="./img/blog_2.png" />
            <div class="info">
              <h3>Furniture and Products for the Work-From-Home Lifestyle</h3>
              <p>If you’ve never worked from home or needed a home office, you will need to create a space that offers all the conveniences of the office, with the comforts of being at home. This might seem like a daunting task, but you aren’t alone. Things to Consider When Creating Your Home Office The key to…</p>
              <div class = "_btn"><button><a href = ""><a>Read more</a></button></div>
            </div>
          </div>
          <div class="item">
            <img src="./img/blog_3.png" />
            <div class="info">
              <h3>How to Increase Your Work-From-Home Productivity Through Furniture Rearrangement</h3>
              <p>Did you work in an office before the COVID-19 pandemic hit? If so, you may currently be working from home. How does your productivity compare, now that you’re surrounded by family members and pets throughout the day? If you’re struggling to get work done, consider how the right furniture arrangement can increase your work-from-home productivity.…</p>
              <div class = "_btn"><button><a href = ""><a>Read more</a></button></div>
            </div>
          </div>
          <div class="item">
            <img src="./img/blog_4.png" />
            <div class="info">
              <h3>What Is an Ergonomic Chair?</h3>
              <p>Ergonomic chairs are fully adjustable for a custom fit, providing optimal body support so that users maintain good posture while sitting. Back support is a key element of the ergonomic chair, used in corporate workplaces and home offices worldwide. For those interested in comfort, health, and productivity, the ergonomic office chair is essential.</p>
              <div class = "_btn"><button><a href = ""><a>Read more</a></button></div>
            </div>
          </div>
      </div>
    </div>
</section> 

<?php
  include_once('footer.php');
  ?>
</body>
</html>