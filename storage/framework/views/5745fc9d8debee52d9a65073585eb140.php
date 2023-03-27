<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cv tema 2</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
html {
  height: 100%;
}
body {
  min-height: 100%;
  background: #eee;
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  color: #222;
  font-size: 14px;
  line-height: 26px;
  padding-bottom: 50px;
}
.container {
  max-width: 700px;
  background: #fff;
  margin: 0px auto 0px;
  box-shadow: 1px 1px 2px #dad7d7;
  border-radius: 3px;
  padding: 40px;
  margin-top: 50px;
}
.header {
  margin-bottom: 30px;
}
.header .full-name {
  font-size: 40px;
  text-transform: uppercase;
  margin-bottom: 5px;
}
.header .first-name {
  font-weight: 700;
}
.header .last-name {
  font-weight: 300;
}
.header .contact-info {
  margin-bottom: 20px;
}
.header .email,
.header .phone {
  color: #999;
  font-weight: 300;
}
.header .separator {
  height: 10px;
  display: inline-block;
  border-left: 2px solid #999;
  margin: 0px 10px;
}
.header .position {
  font-weight: bold;
  display: inline-block;
  margin-right: 10px;
  text-decoration: underline;
}
.details {
  line-height: 20px;
}
.details .section {
  margin-bottom: 40px;
}
.details .section:last-of-type {
  margin-bottom: 0px;
}
.details .section__title {
  letter-spacing: 2px;
  color: #54afe4;
  font-weight: bold;
  margin-bottom: 10px;
  text-transform: uppercase;
}
.details .section__list-item {
  margin-bottom: 40px;
}
.details .section__list-item:last-of-type {
  margin-bottom: 0;
}
.details .left,
.details .right {
  vertical-align: top;
  display: inline-block;
}
.details .left {
  width: 60%;
}
.details .right {
  tex-align: right;
  width: 39%;
}
.details .name {
  font-weight: bold;
}
.details a {
  text-decoration: none;
  color: #000;
  font-style: italic;
}
.details a:hover {
  text-decoration: underline;
  color: #000;
}
.details .skills__item {
  margin-bottom: 10px;
}
.details .skills__item .right input {
  display: none;
}
.details .skills__item .right label {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: #c3def3;
  border-radius: 20px;
  margin-right: 3px;
}
.details .skills__item .right input:checked + label {
  background: #79a9ce;
}

    </style>

</head>
<body>
<div class="container">
  <div class="header">
    <div class="full-name">
      <span class="first-name"><?php echo e(auth()->user()->name); ?></span>
    </div>
    <div class="contact-info">
      <span class="email">Email: </span>
      <span class="email-val"><?php echo e(auth()->user()->email); ?></span>
      <span class="separator"></span>

    </div>

    <div class="about">
      <span class="position"><?php echo e($resume->title); ?> </span>
      <span class="desc">
        <?php echo e($resume->summary); ?>

      </span>
    </div>
  </div>
   <div class="details">
    <div class="section">
      <div class="section__title">Experience</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?php echo e($resume->experience); ?></div>
          </div>
        </div>

      </div>
    </div>
    <div class="section">
      <div class="section__title">Education</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?php echo e($resume->education); ?></div>
          </div>
        </div>

      </div>

  </div>
     <div class="section">
         <div class="section__list">
         <div class="section__list-item">
           <div class="name">DSP</div>
           <div class="section__title">Projects</div>
           <div class="text">I am a front-end developer with more than 3 years of experience writing html, css, and js. I'm motivated, result-focused and seeking a successful team-oriented company with opportunity to grow.</div>
         </div>
       </div>
    </div>
    <div class="section">
        <div class="section__title">
          Skills
          </div>
          <div class="section__list">
            <div class="section__list-item">
                     <?php
                       $arr = array($resume->skills);
                        $new_arr = array_map(function($str) {
                            return str_replace(",", "", $str);
                        }, $arr);
                     ?>
                     <?php $__currentLoopData = $new_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="section__list">
                        <div class="section__list-item">
                                 <?php echo e($item); ?>

                         </div>
                      </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </div>
          </div>
        </div>
     <div class="section">
     <div class="section__title">
       Interests
       </div>
       <div class="section__list">
         <div class="section__list-item">
                  <?php echo e($resume->interest); ?>

          </div>
       </div>
     </div>
     </div>
  </div>
</div>

</body>
</html>
<?php /**PATH /var/www/html/resources/views/resumes/user-resumes/section1.blade.php ENDPATH**/ ?>