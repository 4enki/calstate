<?php
/**
 * Template Name: Careers page
 */

get_header(); ?>
<div class="headline" style="background-image: url('<?php echo get_field('careers_bg_img-page'); ?>');">
  <div class="box">
    <div class="headline__wrapper">
      <h1><?php the_title(); ?></h1>
    </div><!-- /.headline__wrapper -->
    <div class="headline__footer">
      <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div><!-- /.headline__footer -->
  </div><!-- /.box -->
</div><!-- /.headline -->

<div class="careers-headline" style="background-image: url('<?php echo get_field('careers_headline_img-page'); ?>');">
    <div class="careers-headline-box">
        <div class="careers-headline__info">
            <h2>Jobs Calstate</h2>
            <p>Life in Calstate — a kaleidoscope of events, emotions and experiences related to one. Our advantage — in a variety of sincere love for the work and constant self-improvement. We want to see in their ranks such as obsessed result. Join us!</p>
        </div>
    </div>
</div>
<div class="page-wrapper">
    <div class="box">
        <div class="careers-page">
            <div class="careers">

                <div class="careers__item">
                    <div class="careers-box careers-box-top">
                        <div class="careers__q">
                            <h2>HR Business Partner</h2>
                        </div><!-- /.careers__q -->
                        <div class="careers__content">
                            <p>Calstate invites experienced HR Business Partner. In this role, you will join our creative team and together with the managers and experts of the company will be able to influence its development, implementing global HR-projects, to participate in key decisions in the field of talent management and development: attracting professional training of employees, performance management, construction remuneration systems and so forth.</p>
                            <h3>The content of the work:</h3>
                            <ul>
                                <li>Nteraction with the management team for the creation, development and implementation of effective talent management system in the company and increase the involvement and employee satisfaction;</li>
                                <li>Identifying business needs in the field of personnel management and the formation of clear planning and ongoing HR-strategies to achieve them;</li>
                                <li>Development of corporate culture;</li>
                                <li>Support of business leaders in the management of change within the company structure =and its member teams;</li>
                                <li>Participation in global HR-projects as an expert and / or coordinator;</li>
                                <li>The organization of work of the centers of expertise and services within the fixed business structure (TA, L & D, etc. );</li>
                                <li>Training, assessment and executive coaching on effective management teams;</li>
                                <li>Solution of other problems in the field of organizational development and human resources received from the head of HR-department.</li>
                            </ul>
                            <h3>Requirements:</h3>
                            <ul>
                                <li>experience in a role as a HR Generalist for more than 3 years (full cycle of HR-processes: the attraction, development, retention of employees, compensation system, etc…);</li>
                                <li>leadership and management skills, the ability to engage, inspire others to solve common problems;</li>
                                <li>ability to find and make informed decisions;</li>
                                <li>the ability to build effective partnerships;</li>
                                <li>ability to work with a large number of tasks in a fast paced, matrix, multicultural environment.</li>
                            </ul>
                            <p class="info-text"><a href="">(732) 803-01 03</a><a href="">jobs@calstate.com</a></p>
                        </div><!-- /.careers__content -->
                    </div><!-- /.careers-box -->
                </div><!-- /.careers__item -->

                <div class="careers__item">
                    <div class="careers-box">
                        <div class="careers__q">
                            <h2>Account Manager</h2>
                        </div><!-- /.careers__q -->
                        <div class="careers__content">
                        </div><!-- /.careers__content -->
                    </div><!-- /.careers-box -->
                </div><!-- /.careers__item -->

                <div class="careers__item">
                    <div class="careers-box careers-box-bottom">
                        <div class="careers__q">
                            <h2>Driver</h2>
                        </div><!-- /.careers__q -->
                        <div class="careers__content">
                        </div><!-- /.careers__content -->
                    </div><!-- /.careers-box -->
                </div><!-- /.careers__item -->

            </div><!-- /.careers -->
            <div class="careers-info">
                <h2>Human Resources Department</h2>
                <a href="">(732) 803-01 03</a>
                <a href="">(732) 803-01 03</a>
                <a href="">jobs@calstate.com</a>
            </div><!-- /.careers-info -->
        </div><!-- /.careers-page -->
    </div><!-- /.box -->
</div><!-- /.page-wrapper -->


<?php get_footer(); ?>
