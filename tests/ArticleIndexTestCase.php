<?php

namespace AiScrapersTests;

use Dan\AiCrawler\AiCrawler;
use PHPUnit_Framework_TestCase;

/**
 * Class HeuristicsTestCase
 *
 * @package Heuristics
 */
class BasicTestCase extends PHPUnit_Framework_TestCase
{
    public $crawler;

    /**
     * Prep $crawler with content.
     */
    public function setUp()
    {
        $this->crawler = new AiCrawler($this->example);
    }

    /**
     * Clear the crawler.
     */
    public function tearDown()
    {
        $this->crawler = null;
    }

    /**
     * Example document we'll use for testing. 2015-11-08
     *
     * @var string
     * @see https://laravel-news.com/blog/
     * @suggests Subscribing to Laravel News.
     */
    public $example = '
        <!doctype html>
        <html class="no-js" lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
           <body class="language-php">
              <header>
                 <a href="/"><img src="/img/ln-logo@2x.png"></a>
                 <h1>
                    <a href="/">Laravel News</a>
                 </h1>
                 <p>Curated <em>by</em> <a href="http://ericlbarnes.com">Eric L. Barnes</a></p>
                 <nav>
                    <div class="menu-header-container">
                       <ul id="menu-header" class="menu">
                          <li id="menu-item-4301" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-4297 current_page_item current_page_parent menu-item-4301"><a href="https://laravel-news.com/blog/">Blog</a></li>
                          <li id="menu-item-466" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-466"><a href="https://laravel-news.com/archive/">Archive</a></li>
                          <li id="menu-item-2633" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2633"><a href="https://laravel-news.com/members/">Membership</a></li>
                          <li id="menu-item-478" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-478"><a title="Sponsor" href="https://laravel-news.com/sponsor/">Sponsor</a></li>
                          <li id="menu-item-494" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-494"><a href="https://laravel-news.com/about/">About</a></li>
                       </ul>
                    </div>
                 </nav>
                 <div class="nav-sponsor">
                    <div class="textwidget">
                       <p>Sponsor: <a href="https://laravel-news.com/2015/04/sublime-text/">Become a Sublime Text Power User</a></p>
                    </div>
                 </div>
              </header>
              <div class="wrapper">
                 <div class="main-content">
                    <div class="feed">
                       <section class="post text">
                          <h2 class="title"><a href="https://laravel-news.com/2015/11/ln-03-laravel-quickstart-tutorials/" rel="bookmark">LN 03: Laravel Quickstart Tutorials</a></h2>
                          <!--<em class="post__date">--><!--</em>-->
                          <div class="post__content">
                             <p><img src="https://d1zj60nuin5mrx.cloudfront.net/media/2015/11/03080538/laravel-news-podcast-smaller.png" alt="Laravel Quick Start Tutorials" width="900" height="450" class="aligncenter size-full wp-image-5551" /></p>
                             <p>In this episode of the Laravel News Podcast, we discuss the new Laravel quick start guides, features coming to Laravel 5.2, Elixir and Bootstrap, Developer interruptions and more!</p>
                             <p>You can listen below or subscribe in <a href="https://itunes.apple.com/us/podcast/laravel-news-podcast/id1051289963?mt=2&amp;at=1l3vuLL" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'https://itunes.apple.com/us/podcast/laravel-news-podcast/id1051289963?mt=2&amp;at=1l3vuLL\', \'iTunes\']);" >iTunes</a>.</p>
                             <p><iframe frameborder=\'0\' height=\'36px\' scrolling=\'no\' seamless src=\'https://simplecast.fm/e/19501?style=dark\' width=\'100%\'></iframe></p>
                             <h2>Show Notes &amp; Links</h2>
                             <ul>
                                <li>New Laravel guides. <a href="https://laravel-news.com/2015/10/laravel-quick-start-learn-to-build-a-task-list/">Quick Start</a> and <a href="https://laravel-news.com/2015/10/laravel-intermediate-tutorial/">Intermediate</a></li>
                                <li>
                                   <a href="https://laravel-news.com/2015/11/laravel-5-2-a-look-at-whats-coming/">New features coming to Laravel 5.2</a>
                                   <ul>
                                      <li>Implicit Model Binding</li>
                                      <li>Output from scheduled tasks</li>
                                      <li>Array validation &#8212; <a href="https://twitter.com/taylorotwell/status/659828575982366720" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'https://twitter.com/taylorotwell/status/659828575982366720\', \'Taylor&#8217;s Reaction\']);" >Taylor&#8217;s Reaction</a></li>
                                   </ul>
                                </li>
                                <li><a href="https://laravel-news.com/2015/10/setup-bootstrap-sass-with-laravel-elixir/">Bootstrap Sass Elixir</a></li>
                                <li><a href="http://thetomorrowlab.com/2015/01/why-developers-hate-being-interrupted/" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'http://thetomorrowlab.com/2015/01/why-developers-hate-being-interrupted/\', \'Why developer hate being interrupted\']);" >Why developer hate being interrupted</a></li>
                                <li><a href="https://laravel-news.com/2015/10/how-to-add-tagging-to-your-laravel-app/">Laravel Tagging Package</a></li>
                                <li>
                                   Passwords
                                   <ul>
                                      <li><a href="https://alfrednutile.info/posts/166" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'https://alfrednutile.info/posts/166\', \'Forcing more complex passwords in Laravel\']);" >Forcing more complex passwords in Laravel</a></li>
                                      <li><a href="http://ryanwinchester.ca/post/stop-forcing-your-arbitrary-password-rules-on-me" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'http://ryanwinchester.ca/post/stop-forcing-your-arbitrary-password-rules-on-me\', \'Stop forcing your password rules on me\']);" >Stop forcing your password rules on me</a></li>
                                   </ul>
                                </li>
                                <li><a href="https://twitter.com/ericlbarnes" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'https://twitter.com/ericlbarnes\', \'Eric on Twitter\']);" >Eric on Twitter</a></li>
                                <li><a href="https://twitter.com/JackFruh" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'https://twitter.com/JackFruh\', \'Jack on Twitter\']);" >Jack on Twitter</a></li>
                             </ul>
                          </div>
                          <!-- .entry-content -->
                          <div class="entry-footer entry-meta">
                             <a href="https://laravel-news.com/2015/11/ln-03-laravel-quickstart-tutorials/" rel="bookmark">#
                             <time class="entry-footer__date" datetime="2015-11-03T12:08:38+00:00">November 3, 2015</time></a>
                             <span class="cat-links">
                             <a href="https://laravel-news.com/category/podcast/" rel="category tag">Podcast</a>				</span>
                          </div>
                       </section>
                       <hr>
                       <section class="post latest-links">
                          <h2 class="title"><a href="http://links.laravel-news.com">Quick Links</a> <br><em>Updated throughout the day</em></h2>
                          <ul>
                             <li class="link">
                                <div class="link--details">
                                   <h4>
                                      <a href="http://links.laravel-news.com/resource/208-laravel-collection-lookaheads/">
                                      Laravel Collection Lookaheads                                        </a>
                                   </h4>
                                   <div class="link--author">
                                      Added by
                                      <a href="https://twitter.com/@codebyjeff">@codebyjeff</a>
                                   </div>
                                </div>
                             </li>
                             <li class="link">
                                <div class="link--details">
                                   <h4>
                                      <a href="http://links.laravel-news.com/resource/207-automate-subtree-splits-with-github-webhook-andor-scheduler/">
                                      Automate subtree splits with github webhook and/or scheduler                                         </a>
                                   </h4>
                                   <div class="link--author">
                                      Added by
                                      <a href="https://twitter.com/@fungkudev">@fungkudev</a>
                                   </div>
                                </div>
                             </li>
                             <li class="link">
                                <div class="link--details">
                                   <h4>
                                      <a href="http://links.laravel-news.com/resource/205-centos-or-redhat-ansible-and-laravel-how-to/">
                                      CentOS or Redhat, Ansible and Laravel How To                                        </a>
                                   </h4>
                                   <div class="link--author">
                                      Added by
                                      <a href="https://twitter.com/@alnutile">@alnutile</a>
                                   </div>
                                </div>
                             </li>
                             <li class="link">
                                <div class="link--details">
                                   <h4>
                                      <a href="http://links.laravel-news.com/resource/206-climb/">
                                      Climb                                        </a>
                                   </h4>
                                   <div class="link--author">
                                      Added by
                                      <a href="https://twitter.com/@vnkla">@vnkla</a>
                                   </div>
                                </div>
                             </li>
                             <li class="link">
                                <div class="link--details">
                                   <h4>
                                      <a href="http://links.laravel-news.com/resource/204-how-to-choose-a-javascript-framework/">
                                      How To Choose A Javascript Framework                                        </a>
                                   </h4>
                                   <div class="link--author">
                                      Added by
                                      <a href="https://twitter.com/@freekmurze">@freekmurze</a>
                                   </div>
                                </div>
                             </li>
                          </ul>
                       </section>
                       <hr>
                       <section class="post text">
                          <h2 class="title"><a href="https://laravel-news.com/2015/11/laravel-5-2-a-look-at-whats-coming/" rel="bookmark">Laravel 5.2 &#8212; A Look at what&#8217;s coming</a></h2>
                          <!--<em class="post__date">--><!--</em>-->
                          <div class="post__content">
                             <p><img src="https://d1zj60nuin5mrx.cloudfront.net/media/2015/11/01000606/laravel-5-2.png" alt="Laravel 5.2" width="1024" height="512" class="aligncenter size-full wp-image-5541" /></p>
                             <p class="lead">Laravel 5.2 development is underway and so far a few nice additions have been announced. Let&#8217;s take a look at everything we know is coming to the release.</p>
                             <h2>Implicit model binding</h2>
                             <p>Implicit model binding is a new feature that automatically binds a model to a route. Here is an example in code:</p>
                             <pre><code>Route::get(\'/api/posts/{post}\', function(Post $post) {
            return $post;
        });
        </code></pre>
                             <p>What this does is behind the scenes call <code>Post::findOrFail($post)</code> and injects it into the $post variable. For the seasoned Laravel developers, this is similar to the existing <a href="http://laravel.com/docs/5.1/routing#route-model-binding" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'http://laravel.com/docs/5.1/routing#route-model-binding\', \'route model binding\']);" >route model binding</a> but now removes the step of having to bind it manually.</p>
                             <h2>Appending output from scheduled tasks</h2>
                             <p>The <a href="https://laravel-news.com/2014/11/laravel-5-scheduler/">Laravel Scheduler</a> will now be able to append output from the task to a file.</p>
                             <pre><code>$schedule-&gt;command(\'emails:send\')
            -&gt;hourly()
            -&gt;appendOutputTo($filePath);
        </code></pre>
                             <p>Previously, Laravel included a <code>sendOutputTo</code> option which would write the current results but not append.</p>
                             <h2>Laravel 5.2 Form Array Validation</h2>
                             <p>This is a feature I&#8217;m excited about. In fact, I wrote a <a href="http://ericlbarnes.com/laravel-array-validation/" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'http://ericlbarnes.com/laravel-array-validation/\', \'whole tutorial\']);" >whole tutorial</a> on one way of making it work and it has been a popular post.</p>
                             <p>Pretend you have a form with an array of input fields like this:</p>
                             <pre><code>&lt;p&gt;
        &lt;input type="text" name="person[1][id]"&gt;
        &lt;input type="text" name="person[1][name]"&gt;
        &lt;/p&gt;
        &lt;p&gt;
        &lt;input type="text" name="person[2][id]"&gt;
        &lt;input type="text" name="person[2][name]"&gt;
        &lt;/p&gt;
        </code></pre>
                             <p>In Laravel 5.1 to add validation rules it required looping through and adding the rules individually. Instead of having to do all that it&#8217;s been &#8220;Laravelized&#8221; into this:</p>
                             <pre><code>$v = Validator::make($request-&gt;all(), [
          \'person.*.id\' =&gt; \'exists:users.id\',
          \'person.*.name\' =&gt; \'required:string\',
        ]);
        </code></pre>
                             <h2>Collections Wildcards</h2>
                             <p>When using a collection and wanting to pull out data, you can now pass a <code>*</code> as a wildcard:</p>
                             <pre><code>$posts-&gt;pluck(‘posts.*.title’);
        </code></pre>
                             <p>This will return all title&#8217;s for all posts.</p>
                             <h2>Database Session Driver</h2>
                             <p>The database session driver now includes <code>user_id</code> and <code>ip_address</code> so you can easily clear all sessions for a given user.</p>
                             <h3>More To Come&#8230;</h3>
                             <p>As the release date for Laravel 5.2 gets closer I&#8217;m certain more new features will be announced and I will keep this post updated along the way.  Be sure and join the <a href="https://laravel-news.com/newsletter/">newsletter</a> to stay up to date.</p>
                          </div>
                          <!-- .entry-content -->
                          <div class="entry-footer entry-meta">
                             <a href="https://laravel-news.com/2015/11/laravel-5-2-a-look-at-whats-coming/" rel="bookmark">#
                             <time class="entry-footer__date" datetime="2015-11-02T10:20:45+00:00">November 2, 2015</time></a>
                          </div>
                       </section>
                       <hr>
                       <section class="post text">
                          <h2 class="title"><a href="https://laravel-news.com/2015/10/laravel-intermediate-tutorial/" rel="bookmark">Laravel Intermediate Tutorial</a></h2>
                          <!--<em class="post__date">--><!--</em>-->
                          <div class="post__content">
                             <p><img src="https://d1zj60nuin5mrx.cloudfront.net/media/2015/10/28205943/laravel-intermediate-tutorial.png" alt="Laravel Intermediate Tutorial" width="1024" height="512" class="aligncenter size-full wp-image-5530" /></p>
                             <p>Yesterday, a brand new <a href="https://laravel-news.com/2015/10/laravel-quick-start-learn-to-build-a-task-list/">Laravel Quick Start</a> tutorial was published in the documentation, and today a new <a href="http://laravel.com/docs/5.1/quickstart-intermediate" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'http://laravel.com/docs/5.1/quickstart-intermediate\', \'intermediate\']);" >intermediate</a> tutorial has been published.</p>
                             <p>This intermediate tutorial covers Eloquent relationships, Authentication, Dependency Injection, Route Model Binding, Authorization, and more.  Both of these Laravel tutorials are fantastic resources for getting up and running with the framework.</p>
                             <p>Taylor also mentioned that a more advanced tutorial might be coming as early as tomorrow.</p>
                          </div>
                          <!-- .entry-content -->
                          <div class="entry-footer entry-meta">
                             <a href="https://laravel-news.com/2015/10/laravel-intermediate-tutorial/" rel="bookmark">#
                             <time class="entry-footer__date" datetime="2015-10-29T07:56:09+00:00">October 29, 2015</time></a>
                             <span class="cat-links">
                             <a href="https://laravel-news.com/category/laravel-tutorials/" rel="category tag">Laravel Tutorials</a>				</span>
                          </div>
                       </section>
                       <hr>
                       <section class="post text">
                          <h2 class="title"><a href="https://laravel-news.com/2015/10/laravel-quick-start-learn-to-build-a-task-list/" rel="bookmark">Laravel Quick Start &#8211; Learn to build a task list</a></h2>
                          <!--<em class="post__date">--><!--</em>-->
                          <div class="post__content">
                             <p><img src="https://d1zj60nuin5mrx.cloudfront.net/media/2015/10/27201931/laravel-quick-start.png" alt="Laravel Quick Start" width="1024" height="512" class="aligncenter size-full wp-image-5524" /></p>
                             <p>The Laravel documentation now includes a dedicated <a href="http://laravel.com/docs/5.1/quickstart" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'http://laravel.com/docs/5.1/quickstart\', \'quick start section\']);" >quick start section</a> to guide you through creating a basic task list.</p>
                             <p>For those new to the framework, this is an excellent guide to show you the basics but even the experienced can pick up new tricks. For example, it demonstrates how to compartmentalize views using sections and includes plus several helpers like <code>csrf_field()</code> and <code>method_field()</code>.</p>
                             <p>To go along with the tutorial is a <a href="http://github.com/laravel/quickstart-basic" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'http://github.com/laravel/quickstart-basic\', \'Github repo\']);" >Github repo</a> where you can view all the source and easily check it out to play around yourself.</p>
                          </div>
                          <!-- .entry-content -->
                          <div class="entry-footer entry-meta">
                             <a href="https://laravel-news.com/2015/10/laravel-quick-start-learn-to-build-a-task-list/" rel="bookmark">#
                             <time class="entry-footer__date" datetime="2015-10-28T07:45:41+00:00">October 28, 2015</time></a>
                             <span class="cat-links">
                             <a href="https://laravel-news.com/category/laravel-tutorials/" rel="category tag">Laravel Tutorials</a>				</span>
                          </div>
                       </section>
                       <hr>
                       <section class="post text">
                          <h2 class="title"><a href="https://laravel-news.com/2015/10/announcing-the-laravel-news-podcast/" rel="bookmark">Announcing the Laravel News Podcast</a></h2>
                          <!--<em class="post__date">--><!--</em>-->
                          <div class="post__content">
                             <p><img class="aligncenter size-full wp-image-5513" src="https://d1zj60nuin5mrx.cloudfront.net/media/2015/10/26105811/laravel-news-podcast.png" alt="Laravel News Podcast" width="800" height="800" /></p>
                             <p>I&#8217;m happy to announce a new Laravel News Podcast and the first two episodes are now live. My co-host on this podcast is <a href="https://twitter.com/jackfruh" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'https://twitter.com/jackfruh\', \'Jack Fruh\']);" >Jack Fruh</a> and the goal is to discuss some of the highlights of the news over the past few weeks. The current goal is to create an episode every other week.</p>
                             <p>You can listen below or <a href="https://itunes.apple.com/us/podcast/laravel-news-podcast/id1051289963?mt=2&amp;at=1l3vuLL" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'https://itunes.apple.com/us/podcast/laravel-news-podcast/id1051289963?mt=2&amp;at=1l3vuLL\', \'subscribe in iTunes\']);" >subscribe in iTunes</a>. Please consider rating it in iTunes after listening.</p>
                             <h3>Episode 1 &#8211; Introduction and Laravel Spark</h3>
                             <p><iframe src="https://simplecast.fm/e/17050?style=light" width="100%" height="36px" frameborder="0" scrolling="no" seamless=""></iframe></p>
                             <p><strong>Show Links</strong></p>
                             <ul>
                                <li><a href="http://links.laravel-news.com/" target="_blank">Laravel Links</a></li>
                                <li><a href="https://laravel-news.com/newsletter/" target="_blank">Laravel Newsletter</a></li>
                                <li><a href="https://laravel-news.com/2015/09/laravel-spark/" target="_blank">Laravel Spark</a></li>
                                <li><a href="https://laravel-news.com/2015/09/install-spark-in-an-existing-laravel-app/" target="_blank">Install Spark in an Existing Laravel App</a></li>
                                <li><a href="https://laravel-news.com/2015/09/laravel-spark-deep-dive/" target="_blank">Laravel Spark Deep Dive</a></li>
                                <li><a href="https://laravel-news.com/2015/09/flexible-maintainable-laravel-with-angular-material-apps/" target="_blank">Flexible &amp; Maintainable Laravel with Angular Material Apps</a></li>
                                <li><a href="https://sysops.forlaravel.com/diffie-hellman-fix" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'https://sysops.forlaravel.com/diffie-hellman-fix\', \'The Diffie-Hellman Fix\']);" target="_blank">The Diffie-Hellman Fix</a></li>
                                <li><a href="http://easyecommercebook.com/" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'http://easyecommercebook.com/\', \'Easy E-Commerce Book\']);" target="_blank">Easy E-Commerce Book</a></li>
                             </ul>
                             <hr>
                             <h3>Episode 2 &#8211; Model Factories and PhpStorm<br />
                                <iframe src="https://simplecast.fm/e/18702?style=light" width="100%" height="36px" frameborder="0" scrolling="no" seamless=""></iframe>
                             </h3>
                             <p><strong>Show Links</strong></p>
                             <ul>
                                <li><a href="https://laravel-news.com/2015/10/learn-to-use-model-factories-in-laravel-5-1/" target="_blank">Laravel Model Factories</a></li>
                                <li><a href="https://laravel-news.com/2015/10/laravel-blade-directives/" target="_blank">Blade Directives</a></li>
                                <li><a href="https://laravel-news.com/2015/10/material-theme-for-phpstorm/" target="_blank">PhpStorm Material Theme</a></li>
                                <li><a href="https://github.com/daylerees/colour-schemes" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'https://github.com/daylerees/colour-schemes\', \'Colour Schemes by Dayle Rees\']);" target="_blank">Colour Schemes by Dayle Rees</a></li>
                                <li><a href="https://scotch.io/tutorials/automatically-format-laravel-database-fields-with-accessors-and-mutators" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'https://scotch.io/tutorials/automatically-format-laravel-database-fields-with-accessors-and-mutators\', \'Laravel Accessors and Mutators\']);" target="_blank">Laravel Accessors and Mutators</a></li>
                                <li><a href="http://blog.krucas.lt/2015/07/active-menu-state-using-route-attributes/" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'http://blog.krucas.lt/2015/07/active-menu-state-using-route-attributes/\', \'Active menu state using route attributes\']);" target="_blank">Active menu state using route attributes</a></li>
                             </ul>
                          </div>
                          <!-- .entry-content -->
                          <div class="entry-footer entry-meta">
                             <a href="https://laravel-news.com/2015/10/announcing-the-laravel-news-podcast/" rel="bookmark">#
                             <time class="entry-footer__date" datetime="2015-10-26T11:49:19+00:00">October 26, 2015</time></a>
                             <span class="cat-links">
                             <a href="https://laravel-news.com/category/podcast/" rel="category tag">Podcast</a>				</span>
                          </div>
                       </section>
                       <hr>
                       <section class="post link">
                          <a class="post__link__permalink" href="https://laravel-news.com/2015/10/lets-encrypt-is-now-browser-trusted/" rel="bookmark" title="Permalink to Let&#8217;s Encrypt is now browser trusted">
                          <i class="fa fa-anchor"></i>
                          </a>
                          <h2 class="post__link">
                             <a href="https://laravel-news.com/2015/10/lets-encrypt-is-now-browser-trusted/" rel="bookmark" title="Permalink to Let&#8217;s Encrypt is now browser trusted">Let&#8217;s Encrypt is now browser trusted</a>
                          </h2>
                          <div class="post__content">
                             <p><a href="https://letsencrypt.org/2015/10/19/lets-encrypt-is-trusted.html" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'https://letsencrypt.org/2015/10/19/lets-encrypt-is-trusted.html\', \'Let’s Encrypt\']);" >Let’s Encrypt</a>:</p>
                             <blockquote>
                                <p>
                                   We’re pleased to announce that we’ve received cross-signatures from IdenTrust, which means that our certificates are now trusted by all major browsers. This is a significant milestone since it means that visitors to websites using Let’s Encrypt certificates can enjoy a secure browsing experience with no special configuration required.
                                </p>
                                <p>  Both Let’s Encrypt intermediate certificates, Let’s Encrypt Authority X1 and Let’s Encrypt Authority X2, received cross-signatures. Web servers will need to be configured to serve the appropriate cross-signature certificate as part of the trust chain. The Let’s Encrypt client will handle this automatically.</p>
                             </blockquote>
                             <p>If you are unfamiliar with the &#8220;Let&#8217;s Encrypt&#8221; project, it is a free certificate authority that is designed to take away the cost barriers to generating SSL certifications.</p>
                          </div>
                          <div class="entry-footer">
                             <a href="https://laravel-news.com/2015/10/lets-encrypt-is-now-browser-trusted/" rel="bookmark">#
                             <time class="entry-footer__date" datetime="2015-10-20T08:25:56+00:00">October 20, 2015</time></a>
                          </div>
                       </section>
                       <hr>
                       <section class="post text">
                          <h2 class="title"><a href="https://laravel-news.com/2015/10/setup-bootstrap-sass-with-laravel-elixir/" rel="bookmark">Setup Bootstrap Sass with Laravel Elixir</a></h2>
                          <!--<em class="post__date">--><!--</em>-->
                          <div class="post__content">
                             <p><img src="https://d1zj60nuin5mrx.cloudfront.net/media/2015/10/18212424/bootstrap-sass-laravel-elixir.png" alt="Bootstrap Sass Laravel Elixir" width="1024" height="512" class="aligncenter size-full wp-image-5500" /></p>
                             <p>Laravel Elixir is a fantastic package that simplifies working with Gulp.  For the unfamiliar Gulp is a JavaScript task runner that allows you to automate tasks. It can be used for compiling CSS, concating and minifying JavaScript, and much more.</p>
                             <p>Gulp was designed to be faster than previous build tools by utilizing node streams and has become one of the go to build systems. Laravel Elixir is a wrapper around Gulp making the setup a breeze.</p>
                             <p>In this tutorial let&#8217;s take a look at how to setup Bootstrap Sass with Elixir in a default Laravel 5.1 install.</p>
                             <p> <a href="https://laravel-news.com/2015/10/setup-bootstrap-sass-with-laravel-elixir/#more-5498" class="more-link">Continue reading <span class="meta-nav">&rarr;</span></a></p>
                          </div>
                          <!-- .entry-content -->
                          <div class="entry-footer entry-meta">
                             <a href="https://laravel-news.com/2015/10/setup-bootstrap-sass-with-laravel-elixir/" rel="bookmark">#
                             <time class="entry-footer__date" datetime="2015-10-19T07:50:23+00:00">October 19, 2015</time></a>
                             <span class="cat-links">
                             <a href="https://laravel-news.com/category/elixir/" rel="category tag">Laravel Elixir</a>, <a href="https://laravel-news.com/category/laravel-tutorials/" rel="category tag">Laravel Tutorials</a>				</span>
                             <span class="tags-links">
                             <a href="https://laravel-news.com/tag/bootstrap/" rel="tag">Bootstrap</a>			</span>
                          </div>
                       </section>
                       <hr>
                       <section class="post link">
                          <a class="post__link__permalink" href="https://laravel-news.com/2015/10/chandra-laravel-starter-kit-for-developers/" rel="bookmark" title="Permalink to Chandra &#8211; Laravel starter kit for developers">
                          <i class="fa fa-anchor"></i>
                          </a>
                          <h2 class="post__link">
                             <a href="http://goo.gl/KLix3U" rel="nofollow">Chandra &#8211; Laravel starter kit for developers</a>
                          </h2>
                          <div class="post__content">
                             <p><a href="http://goo.gl/KLix3U" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'http://goo.gl/KLix3U\', \'\']);" ><img src="https://d1zj60nuin5mrx.cloudfront.net/media/2015/09/19220834/chandra.png" alt="chandra" width="545" height="225" class="aligncenter size-full wp-image-5318" /></a></p>
                             <p><a href="http://goo.gl/KLix3U" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'http://goo.gl/KLix3U\', \'Chandra &#8211; Laravel starter kit\']);" >Chandra &#8211; Laravel starter kit</a> is built for Laravel developers to kickstart their project.</p>
                             <p>Chandra is a combination of an Admin and Frontend with multiple color schemes to cater your requirements.</p>
                             <p>Authentication and authorization are readily available and related pages like register, login are designed for you.</p>
                             <p>It provides blog module for both the admin and frontend.</p>
                             <p>It comes with a CRUD generator where you can generate much of admin boilerplate code with a click of command.</p>
                             <p><strong>Some of the features include</strong></p>
                             <ul>
                                <li>Built with bootstrap 3.3.4</li>
                                <li>50+ admin pages included</li>
                                <li>10+ frontend pages included</li>
                                <li>404, 500 pages included</li>
                                <li>authentication and authorization is ready to use</li>
                                <li>HTML, Laravel versions included</li>
                                <li>Multiple color schemes for both admin and frontend</li>
                                <li>50+ chart examples</li>
                                <li>calendar UI</li>
                                <li>tables: search, copy and export to PDF or CSV</li>
                                <li>mailbox UI</li>
                                <li>Gallery, image upload, image cropping UI</li>
                             </ul>
                             <p>If you are starting a new Laravel project, <a href="http://goo.gl/KLix3U" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'http://goo.gl/KLix3U\', \'Chandra Laravel UI Kit\']);" >Chandra Laravel UI Kit</a> will save tons of your time and gives an excellent UI for your project. It&#8217;s being continuously updated so you can get many more features and the best part is all updates are free for forever.</p>
                             <p class="text-center">***</p>
                             <p>Many thanks to Chandra for sponsoring Laravel News again this week.</p>
                          </div>
                          <div class="entry-footer">
                             <a href="https://laravel-news.com/2015/10/chandra-laravel-starter-kit-for-developers/" rel="bookmark">#
                             <time class="entry-footer__date" datetime="2015-10-17T21:21:33+00:00">October 17, 2015</time></a>
                          </div>
                       </section>
                       <hr>
                       <section class="post link">
                          <a class="post__link__permalink" href="https://laravel-news.com/2015/10/on-hackathons/" rel="bookmark" title="Permalink to On Hackathons">
                          <i class="fa fa-anchor"></i>
                          </a>
                          <h2 class="post__link">
                             <a href="https://laravel-news.com/2015/10/on-hackathons/" rel="bookmark" title="Permalink to On Hackathons">On Hackathons</a>
                          </h2>
                          <div class="post__content">
                             <p>Stefan Priebsch writing about his experience at a <a href="https://thephp.cc/news/2015/10/on-hackathons" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'https://thephp.cc/news/2015/10/on-hackathons\', \'Hackathon\']);" >Hackathon</a>:</p>
                             <blockquote>
                                <p>
                                   Going back to the hotel, I realized that during the hackathon, the tight schedule had forced us to do pretty much everything that we all know you should not do. And that we had just experienced a &#8220;real&#8221; project situation: a tight deadline, not enough communication &#8220;because we have no time&#8221;, rushed technical decisions like just using HTTP &#8220;because we have no time&#8221;, doing things quick and dirty &#8220;because we have no time&#8221;. Does that sound familiar to anybody? Exactly: most teams that I have met (and I have met many of them) experience just this on a day to day basis. And it is wrong.
                                </p>
                                <p>  Dear organizers of that hackathon: I thank you very much for making this event possible and all the effort you put into it. It has been great fun, and I have learned so very, very much. It has been a priceless experience. As a consequence, I will never ever take part in a hackathon, because it forces us to do pretty much everything the wrong way. When developing software, the goal is not to write a lot of code as quickly as possible. We need to communicate. We have to agree on how we do things. We have to get everybody on the same page. We have to make conscious decisions. We need time to understand the requirements, and we need a feedback loop to clarify them, especially when we think they are flawed. We can never make compromises when it comes to security. Who cares whether our web server is secure, we just had 15 minutes to set it up, and thanks to cloud computing, who would ever assume that it might take longer to actually think about how the live environment should be configured.</p>
                             </blockquote>
                          </div>
                          <div class="entry-footer">
                             <a href="https://laravel-news.com/2015/10/on-hackathons/" rel="bookmark">#
                             <time class="entry-footer__date" datetime="2015-10-16T09:39:06+00:00">October 16, 2015</time></a>
                          </div>
                       </section>
                       <hr>
                       <section class="post link">
                          <a class="post__link__permalink" href="https://laravel-news.com/2015/10/music-for-programming/" rel="bookmark" title="Permalink to Music For Programming">
                          <i class="fa fa-anchor"></i>
                          </a>
                          <h2 class="post__link">
                             <a href="https://laravel-news.com/2015/10/music-for-programming/" rel="bookmark" title="Permalink to Music For Programming">Music For Programming</a>
                          </h2>
                          <div class="post__content">
                             <p><a href="http://musicforprogramming.net" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'http://musicforprogramming.net\', \'\']);" ><img src="https://d1zj60nuin5mrx.cloudfront.net/media/2015/10/15144137/musicforprogramming-1200x640.png" alt="musicforprogramming" width="640" height="341" class="aligncenter size-large wp-image-5482" /></a></p>
                             <p><a href="http://musicforprogramming.net" onclick="_gaq.push([\'_trackEvent\', \'outbound-article\', \'http://musicforprogramming.net\', \'Music For Programmers\']);" >Music For Programmers</a> is a website with curated music for programming.</p>
                             <blockquote>
                                <p>
                                   Music For Programmers is a series of mixes intended for listening while programming to aid concentration and increase productivity (also compatible with other activities).
                                </p>
                             </blockquote>
                             <p>The music included is a mixture of the following qualities:</p>
                             <ul>
                                <li>Drones</li>
                                <li>Noise</li>
                                <li>Fuzz</li>
                                <li>Field recordings</li>
                                <li>Vagueness (Hypnagogia)</li>
                                <li>Textures without rhythm</li>
                                <li>Minor complex chords</li>
                                <li>Early music (Baroque, lute, harpsichord)</li>
                                <li>Very few drums or vocals</li>
                                <li>Synth arpeggios</li>
                                <li>Awesome</li>
                                <li>Walls of reverb</li>
                             </ul>
                             <p>They claim, music possessing these qualities can often provide just the right amount of interest to occupy the parts of your brain that would otherwise be left free to wander and lead to distraction during your work.</p>
                          </div>
                          <div class="entry-footer">
                             <a href="https://laravel-news.com/2015/10/music-for-programming/" rel="bookmark">#
                             <time class="entry-footer__date" datetime="2015-10-15T14:48:44+00:00">October 15, 2015</time></a>
                          </div>
                       </section>
                       <hr>
                    </div>
                    <ul class="pager">
                       <li><a href="https://laravel-news.com/blog/page/2/" >Older <span class="meta-nav">&rarr;</span></a></li>
                    </ul>
                 </div>
                 <div class="sidebar">
                    <div id="secondary" class="widget-area" role="complementary">
                       <aside id="text-15" class="widget widget_text">
                          <div class="textwidget">
                             <div class="book">
                                <div class="book--image">
                                   <a href="http://easyecommercebook.com/" onclick="_gaq.push([\'_trackEvent\', \'outbound-widget\', \'http://easyecommercebook.com/\', \'\']);" ><img src="/img/book-small.png" alt="Laravel and Stripe"></a>
                                </div>
                                <div class="book--text">
                                   <a href="http://easyecommercebook.com/" onclick="_gaq.push([\'_trackEvent\', \'outbound-widget\', \'http://easyecommercebook.com/\', \'\n                    Learn to implement Laravel and Stripe in this fun hands-on guide.\n                \']);" >
                                   Learn to implement Laravel and Stripe in this fun hands-on guide.
                                   </a>
                                </div>
                             </div>
                          </div>
                       </aside>
                    </div>
                    <!-- #secondary -->
                    <div id="" class="widget-area" role="complementary">
                       <div class="latest">
                          <aside id="recent-posts-2" class="widget widget_recent_entries">
                             <h1 class="widget-title">&#8211; Recent Posts &#8211;</h1>
                             <ul>
                                <li>
                                   <a href="https://laravel-news.com/2015/11/ln-03-laravel-quickstart-tutorials/">LN 03: Laravel Quickstart Tutorials</a>
                                </li>
                                <li>
                                   <a href="https://laravel-news.com/2015/11/laravel-5-2-a-look-at-whats-coming/">Laravel 5.2 &#8212; A Look at what&#8217;s coming</a>
                                </li>
                                <li>
                                   <a href="https://laravel-news.com/2015/10/laravel-intermediate-tutorial/">Laravel Intermediate Tutorial</a>
                                </li>
                                <li>
                                   <a href="https://laravel-news.com/2015/10/laravel-quick-start-learn-to-build-a-task-list/">Laravel Quick Start &#8211; Learn to build a task list</a>
                                </li>
                                <li>
                                   <a href="https://laravel-news.com/2015/10/announcing-the-laravel-news-podcast/">Announcing the Laravel News Podcast</a>
                                </li>
                             </ul>
                          </aside>
                          <aside id="text-14" class="widget widget_text">
                             <div class="textwidget">
                                <!--
                                   <div class="book">
                                               <div class="book--image">
                                                   <a href="https://laravel-news.com/2015/04/sublime-text/"><img src="https://d1zj60nuin5mrx.cloudfront.net/media/2015/09/03115307/sublime-text-power-user.png" alt="Sublime Text"></a>
                                               </div>
                                               <div class="book--text">
                                                   <a href="https://laravel-news.com/2015/04/sublime-text/">
                                                       Become a Sublime Text Power User
                                                   </a>
                                               </div>
                                           </div>
                                   -->
                             </div>
                          </aside>
                          <aside id="text-12" class="widget widget_text">
                             <h1 class="widget-title">&#8211; Most Read &#8211;</h1>
                             <div class="textwidget">
                                <ul>
                                   <li><a href="https://laravel-news.com/2015/09/laravel-spark/">Laravel Spark</a></li>
                                   <li><a href="https://laravel-news.com/2015/09/how-to-add-multilingual-support-to-eloquent/">How To Add Multilingual Support to Eloquent</a></li>
                                   <li><a href="https://laravel-news.com/2015/10/learn-to-use-model-factories-in-laravel-5-1/">Laravel Model Factories</a></li>
                                   <li><a href="https://laravel-news.com/2015/10/setup-bootstrap-sass-with-laravel-elixir/">Setting up Laravel Elixir with Bootstrap</a></li>
                                   <li><a href="https://laravel-news.com/2015/08/laravel-5-1-11-released-now-with-authorization/">Laravel 5.1.11 Released -- Now with Authorization</a></li>
                                </ul>
                             </div>
                          </aside>
                       </div>
                    </div>
                    <!-- #secondary -->
                 </div>
              </div>
              <!-- wrapper -->
              <div class="latest-wrap">
                 <div class="latest">
                    <div class="latest--box">
                       <div class="latest--heading">
                          <h3><a href="/archive/">– Greatest Hits –</a></h3>
                       </div>
                       <div class="latest--posts">
                          <h4><a href="/2015/06/laravel-5-1-released/">Laravel 5.1 is released</a></h4>
                          <hr/>
                          <h4><a href="/2015/02/learn-laravel-5-easy-laravel/">Learn Laravel</a></h4>
                          <hr/>
                          <h4><a href="/2014/12/75-laravel-tutorials-packages-resources-2014/">75 Laravel Tips and Tutorials</a></h4>
                          <hr/>
                          <h4><a href="/2014/11/laravel-5-scheduler/">Laravel 5 Scheduler</a></h4>
                          <hr/>
                          <h4><a href="/2014/03/phpstorm-tips-and-tricks/">PhpStorm Tips &amp; Tricks</a></h4>
                          <hr/>
                       </div>
                    </div>
                    <div class="latest--box">
                       <div class="latest--heading">
                          <h3><a href="/category/laravel-tutorials/">– Laravel Tutorials –</a></h3>
                       </div>
                       <div class="latest--posts">
                          <h4><a href="https://laravel-news.com/2015/10/laravel-intermediate-tutorial/" rel="bookmark">Laravel Intermediate Tutorial</a></h4>
                          <hr/>
                          <h4><a href="https://laravel-news.com/2015/10/laravel-quick-start-learn-to-build-a-task-list/" rel="bookmark">Laravel Quick Start &#8211; Learn to build a task list</a></h4>
                          <hr/>
                          <h4><a href="https://laravel-news.com/2015/10/setup-bootstrap-sass-with-laravel-elixir/" rel="bookmark">Setup Bootstrap Sass with Laravel Elixir</a></h4>
                          <hr/>
                          <h4><a href="https://laravel-news.com/2015/10/how-to-add-tagging-to-your-laravel-app/" rel="bookmark">How to add Tagging to your Laravel App</a></h4>
                          <hr/>
                          <h4><a href="https://laravel-news.com/2015/10/ryan-chenkie-getting-starting-with-angular-videos/" rel="bookmark">Ryan Chenkie: Getting starting with Angular Videos</a></h4>
                          <hr/>
                       </div>
                    </div>
                    <div class="latest--box">
                       <div class="latest--heading">
                          <h3><a href="/category/laravel-packages/">– Laravel Packages –</a></h3>
                       </div>
                       <div class="latest--posts">
                          <h4><a href="https://laravel-news.com/2015/09/install-spark-in-an-existing-laravel-app/" rel="bookmark">Install Spark in an Existing Laravel App</a></h4>
                          <hr/>
                          <h4><a href="https://laravel-news.com/2015/09/laravel-doctrine/" rel="bookmark">Laravel Doctrine</a></h4>
                          <hr/>
                          <h4><a href="https://laravel-news.com/2015/08/laravel-caffeine-package/" rel="bookmark">Laravel Caffeine Package</a></h4>
                          <hr/>
                          <h4><a href="https://laravel-news.com/2015/08/stydenet-html-package/" rel="bookmark">StydeNet Html package</a></h4>
                          <hr/>
                          <h4><a href="https://laravel-news.com/2015/08/laravel-oauth-2-0-server/" rel="bookmark">Laravel OAuth 2.0 Server</a></h4>
                          <hr/>
                       </div>
                    </div>
                    <div class="latest--box">
                       <div class="latest--heading">
                          <h3><a href="/laravel-jobs/">– Laravel Jobs –</a></h3>
                       </div>
                       <div class="latest--posts">
                          <h4><a href="https://larajobs.com/job/357/team-lead-php-developer-laravel?partner=38">Team lead / PHP developer (Laravel)</a></h4>
                          <hr/>
                          <h4><a href="https://larajobs.com/job/356/laravel-51-developer?partner=38">Laravel 5.1 Developer</a></h4>
                          <hr/>
                          <h4><a href="https://larajobs.com/job/355/full-time-php-laravel-developer?partner=38">Full-Time PHP / Laravel Developer</a></h4>
                          <hr/>
                          <h4><a href="https://larajobs.com/job/354/grass-fed-full-stack-developer-please-care-about-ux?partner=38">Grass-Fed Full Stack Developer (please care about UX)</a></h4>
                          <hr/>
                          <h4><a href="https://larajobs.com/job/353/seniors-laravelphp-engineer?partner=38">Seniors Laravel/PHP Engineer</a></h4>
                          <hr/>
                       </div>
                    </div>
                 </div>
              </div>
              <footer class="home">
                 <div class="site-footer">
                    <div class="row clearfix">
                       <div class="site-footer--cats">
                          <div class="menu-footer-container">
                             <ul id="menu-footer" class="menu">
                                <li id="menu-item-469" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-469"><a href="https://laravel-news.com/archive/">Archive</a></li>
                                <li id="menu-item-496" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-496"><a href="https://laravel-news.com/sponsor/">Sponsor</a></li>
                                <li id="menu-item-495" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-495"><a href="https://laravel-news.com/about/">About</a></li>
                                <li id="menu-item-676" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-676"><a href="https://laravel-news.com/laravel-jobs/">Laravel Jobs</a></li>
                                <li id="menu-item-677" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-677"><a href="https://laravel-news.com/category/laravel-tutorials/">Laravel Tutorials</a></li>
                                <li id="menu-item-678" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-678"><a href="https://laravel-news.com/category/laravel-packages/">Laravel Packages</a></li>
                                <li id="menu-item-929" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-929"><a href="https://laravel-news.com/category/laravel-books/">Laravel Books</a></li>
                                <li id="menu-item-680" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-680"><a href="https://laravel-news.com/category/the-artisan-files/">The Artisan Files</a></li>
                                <li id="menu-item-2333" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2333"><a href="https://laravel-news.com/category/laravel-applications/">Laravel Applications</a></li>
                                <li id="menu-item-2334" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2334"><a href="https://laravel-news.com/category/homestead/">Laravel Homestead</a></li>
                             </ul>
                          </div>
                       </div>
                       <div class="site-footer--follow">
                          <ul>
                             <li><a href="/newsletter"><i class="fa fa-paper-plane-o"></i> Newsletter</a></li>
                             <li><a href="http://twitter.com/laravelnews" rel="nofollow"><i class="fa fa-twitter"></i> Twitter</a></li>
                             <li><a href="https://www.facebook.com/laravelnews" rel="nofollow"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                             <li><a href="http://plus.google.com/+Laravel-news/posts" rel="nofollow"><i class="fa fa-google-plus"></i> Google +</a></li>
                             <li><a href="https://laravel-news.com/feed/" rel="nofollow"><i class="fa fa-rss"></i> RSS Feed</a></li>
                          </ul>
                       </div>
                    </div>
                    <h3>Search the Archives</h3>
                    <form action="/" method="get">
                       <input type="text" name="s" placeholder="Search">
                    </form>
                    <p>&copy; 2012 - 2015 Laravel News - by <a href="http://ericlbarnes.com">Eric L. Barnes</a></p>
                 </div>
              </footer>
              <div id="ouibounce-modal" class="ouimodal">
                 <div class=\'underlay\'></div>
                 <div class=\'modal\'>
                    <div class="modal-body">
                       <h3>Don\'t Miss the Sunday Digest</h3>
                       <p>Join 6,500+ developers and get the weekly newsletter that includes Laravel tips, tutorials, packages, and other goodies.</p>
                       <form action="//laravelnews.createsend.com/t/d/s/ttdtii/" method="post" id="modal-form">
                          <input id="fieldEmail" name="cm-ttdtii-ttdtii" type="email" placeholder="me@domain.com" required="">
                          <input type="submit" value="Subscribe">
                       </form>
                    </div>
                    <div class=\'modal-footer\'>
                       <p>No thanks and never show me this again</p>
                    </div>
                 </div>
              </div>
              <script src="//cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.8/ouibounce.min.js"></script>
              <script>
                 jQuery( document ).ready(function( $ ) {
                    $("#modal-form").on("submit", function(e){
                        clicky.log(\'#modal\', \'Subscribed\');
                        _gaq.push([\'_trackEvent\', \'Model\', \'Subscribed\']);
                    });
                    $("#subForm").on("submit", function(e){
                        clicky.log(\'#UnderPost\', \'Subscribed\');
                        _gaq.push([\'_trackEvent\', \'UnderPost\', \'Subscribed\']);
                    });

                        // var _ouibounce = ouibounce(document.getElementById(\'ouibounce-modal\'), {
                        //   aggressive: true,
                        //   timer: 0,
                        //   cookieExpire: 99999,
                        //   callback: function() {
                        //   	clicky.log(\'#modal\', \'Shown Modal Form\');
                        //   	_gaq.push([\'_trackEvent\', \'Model\', \'Shown Modal Form\']);
                        //   }
                        // });
                        // $(\'body\').on(\'click\', function() {
                        //   $(\'#ouibounce-modal\').hide();
                        // });
                        // $(\'#ouibounce-modal .modal-footer\').on(\'click\', function() {
                        //   $(\'#ouibounce-modal\').hide();
                        // });
                        // $(\'#ouibounce-modal .modal\').on(\'click\', function(e) {
                        //   e.stopPropagation();
                        // });

                 });
              </script>
              <!-- Memberships powered by Paid Memberships Pro v1.8.6.4.
                 -->
              <script type=\'text/javascript\' src=\'https://laravel-news.com/wp-content/plugins/jetpack/modules/shortcodes/js/jquery.cycle.js?ver=2.9999.8\'></script>
              <script type=\'text/javascript\'>
                 /* <![CDATA[ */
                 var jetpackSlideshowSettings = {"spinner":"https:\/\/laravel-news.com\/wp-content\/plugins\/jetpack\/modules\/shortcodes\/img\/slideshow-loader.gif"};
                 /* ]]> */
              </script>
              <script type=\'text/javascript\' src=\'https://laravel-news.com/wp-content/plugins/jetpack/modules/shortcodes/js/slideshow-shortcode.js?ver=20121214.1\'></script>
              <script type=\'text/javascript\' src=\'https://s0.wp.com/wp-content/js/devicepx-jetpack.js?ver=201545\'></script>
              <script type=\'text/javascript\' src=\'https://laravel-news.com/wp-content/themes/ln-2015/js/navigation.js?ver=20120206\'></script>
              <script type=\'text/javascript\' src=\'https://laravel-news.com/wp-content/themes/ln-2015/js/skip-link-focus-fix.js?ver=20130115\'></script>
              <!-- Clicky Web Analytics - http://clicky.com, WordPress Plugin by Yoast - https://yoast.com/wordpress/plugins/clicky/ -->
              <script type=\'text/javascript\'>
                 function clicky_gc(name) {
                    var ca = document.cookie.split(\';\');
                    for (var i in ca) {
                        if (ca[i].indexOf(name + \'=\') != -1) {
                            return decodeURIComponent(ca[i].split(\'=\')[1]);
                        }
                    }
                    return \'\';
                 }
                 var username_check = clicky_gc(\'comment_author_d6ec3fd4520a5437617644f225f8eb20\');
                 if (username_check) var clicky_custom_session = {username: username_check};
              </script>
              <script type="text/javascript">
                 var clicky = { log : function () { return true;	}, goal: function () { return true;	} };
                 var clicky_site_id = 100744944;
                 (function () {
                 var s = document.createElement(\'script\');s.type = \'text/javascript\';s.async = true;s.src = \'//static.getclicky.com/js\';
                 ( document.getElementsByTagName(\'head\')[0] || document.getElementsByTagName(\'body\')[0] ).appendChild(s);
                 })();
              </script>
              <noscript>
                 <p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100744944ns.gif" /></p>
              </noscript>
              <script type=\'text/javascript\' src=\'https://stats.wp.com/e-201545.js\' async defer></script>
              <script type=\'text/javascript\'>
                 _stq = window._stq || [];
                 _stq.push([ \'view\', {v:\'ext\',j:\'1:3.7.2\',blog:\'72585173\',post:\'4297\',tz:\'-5\',srv:\'laravel-news.com\'} ]);
                 _stq.push([ \'clickTrackerInit\', \'72585173\', \'4297\' ]);
              </script>
           </body>
        </html>
    ';
}
