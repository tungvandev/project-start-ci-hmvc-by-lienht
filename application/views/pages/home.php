<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side / Blog Single-->
            <div class="content-side col-md-8 col-sm-12 col-xs-12 " >
                <div class="content-inner">
                    <!--Page Title-->
                    <div class="sec-title">
                        <div class="title"><a href="post-standard.html">Hello</a></div>
                        <h2><a href="post-standard.html">Have a good day!</a></h2>
                        <div class="post-date">May 30, 2018</div>
                    </div>
                    <!--News Block One-->

                    <?php
                    foreach ($post_list as $key => $item)
                    {?>
                        <div class="news-blk-one" style=" height: 500px; margin:10px; border-bottom: 1px solid #0000FF; ">
                            <div class="name" style="height: 10%;">
                                <a  style="color: black; padding: 10px; font-size: 20px;" target="_blank" href="<?php echo $item['source'];?>"><?php echo $item['name']; ?></a>
                            </div>
                            <div class="picture" style="width: 97%; height: 80%;">
                                <a target="_blank" href="<?php echo $item['source'];?>"><img title="<?php echo $item['title'];?>" style="width: 100%; height: 90%;" src="<?php echo $item['photo']; ?>" alt=""></a>
                            </div>
                        </div>
                    <?php }
                    ?>

                </div>
            </div>

            <!--Sidebar-->
            <div class="sidebar-side col-md-4 col-sm-12 col-xs-12">
                <aside class="sidebar">

                    <!--Social Media Widget-->
                    <div class="sidebar-widget social-widget">
                        <div class="inner-box">
                            <!--Social Icon Two-->
                            <ul class="social-icon-two">
                                <li><a href="#"><span class="icon fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="icon fa fa-pinterest-p"></span></a></li>
                                <li><a href="#"><span class="icon fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="icon fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!--About Widget-->
                    <div class="sidebar-widget about-widget">
                        <h2>About The Author</h2>
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url()?>public/images/resource/about.jpg" alt="" />
                            </div>
                            <div class="text">Morbi accumsan ipsum velit. Nam nec tellu ale oplodio tincidunt auctor a ornare odiod non  mas vitae erat consequat auctor... <a href="about.html" class="icon fa fa-arrow-right"></a></div>
                        </div>
                    </div>

                </aside>
            </div>

        </div>
    </div>
    <div class="container">
        <?php echo $list_pagination; ?>
    </div>
</div>