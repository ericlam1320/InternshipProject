@extends('layout.master')

@section('menu-thaoluan','menu-top-active')

@section ('title','Thảo Luận')



@section('style')

<style type="text/css" media="screen">
  /* CSS used here will be applied after bootstrap.css */
.fa-heart{
  color:#e74c3c;
}
  [class^="fa fa-star"]{
    color:#f1c40f;
  }
.fa-quote-right{
  font-size:.5em;
  }
section.panel-title{
    padding:15px;
    padding-top:0;
  }
  #user-description{
    height:100%;
   border-left:2px solid #444; 
    margin:0 auto;
    text-align:center;
  }
 figure img{
    display :inline !important;
  }
  h4.online:before{
     background-color:green;
      height:10px;
      width:10px;
      border: 2px solid #11f464;
    }
dt{
   text-align:left !important; 
     width:37% !important;
    }
    dd{
     margin-left:2% !important;
    }
    
.panel-footer{
    width:100%;
    min-height:40px;
  }
      

</style>


@endsection



@section('content')

<div class="content-wrapper">
  <div class="container">

      <div class="row pad-botm">
        <div class="col-md-12">
          <h4 class="header-line">Thảo luận</h4>
        </div>
      </div>

      <div class="row">

               <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-info back-widget-set text-center">
                  <i class="fa fa-user fa-5x"></i>
                  <h3>Vương Anh Kho</h3>
                </div>
              </div>

              <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-success back-widget-set text-center">
                  <i class="fa fa-bookmark fa-5x"></i>
                  <h3>DH51400553</h3>
                </div>
              </div>

              <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-warning back-widget-set text-center">
                  <i class="fa fa-mortar-board fa-5x"></i>
                  <h3>D14-TH02</h3>
                </div>
              </div>

              <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-danger back-widget-set text-center">
                  <i class="fa fa-users fa-5x"></i>
                  <h3>30+ </h3>
                </div>
              </div>

        </div>

        <section class="container">
          <section class="row clearfix">
            <section class="col-md-12 column">

              <ol class="breadcrumb">
                <li><a href="#">Forum</a></li>
                <li><a href="#">Web design</a></li>
                <li class="active">Help me in this code? </li>
              </ol>
            </section>
          </section>
          <section class="row clearfix">
            <section class="col-md-12 column">



              

              
              @for($i=1;$i<=5;$i++)
              <div class="row clearfix">
                <div class="col-md-12 column">
                  <div class="panel panel-default">
                    <div class="panel-heading">

                      <section class="panel-title">
                        <time class="pull-right">
                          <i class="fa fa-calendar"></i> 2014-09-15 , <i class="fa fa-clock-o"></i> 1:35 pm
                        </time>

                        <section class="pull-left" id="id">
                          <abbr title="count of posts in this topic">#1</abbr>
                        </section>
                      </section>
                    </div>

                    <section class="row panel-body">
                      <section id="user-description" class="col-md-3 ">
                        <section class="well">
                          <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cricle"></i>Vương Anh Kho<!-- <span class="caret"></span> --></a>
                            <!-- <ul class="dropdown-menu" role="menu">
                              <li><a href="#"><i class="fa fa-user"></i> See profile</a></li>
                              <li><a href="#"><i class="fa fa-envelope"></i> Send PM</a></li>
                              <li><a href="#"><i class="fa fa-code"></i>View all Articles</a></li>
                              <li><a href="#"><i class="fa fa-th-list"></i>View all Posts</a></li>
                              <li class="divider"></li>
                              <li><a href="#"><i class="fa fa-plus"></i>Add to contact List</a></li>
                              <li class="divider"></li>
                              <li><a href="#"><i class="fa fa-cogs"></i> Manage User (for adminstrator)</a></li>
                            </ul> -->
                          </div>

                          <figure>
                            <img class="img-rounded img-responsive" src="http://www.webdesignforums.net/img/wdf_avatar.jpg" alt="Mohammad Sharifi's avatar">
                            <figcaption class="text-center">Assmin <br><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i> </figcaption>
                          </figure>

                          <dl class="dl-horizontal">
                            <dt>Ngày đăng</dt>
                            <dd>15 September 2014</dd>
                            <dt>Bài viết :</dt>
                            <dd>785</dd>
                          </dl>
                        </section>
                      </section>
                      <section class="col-md-9">
                        <h2> Tóm tắt đồ án thực tập tốt nghiệp</h2>
                        <hr>
                        Thi Trường Minh Vương Anh Kho Nguyễn Chung Tú Thái Kim Thanh Huỳnh Trí Minh
                      </section>

                      
                    </section>

                    <div class="panel-footer">
                      <div class="row">
                        <section class="col-md-2 ">
                          <i class="fa fa-thumbs-up "></i><a href="#"> Thích </a>| <i class="fa fa-warning "></i><a href="#"> Báo cáo </a>
                        </section>

                        <section id="thanks" class="col-md-6">
                          <!-- <small><a href="#" data-toggle="tooltip" title="You and david,ehsan,john doe">  who L<i class="fa fa-heart "></i>ve this!</a> </small><br> -->
                        </section>

                        <section class="col-md-4">
                          <span class="fa-stack">
                            <i class="fa fa-quote-right fa-stack-1x"></i>
                            <i class="fa fa-comment-o fa-lg fa-stack-1x"></i>
                          </span><a href="#"> Trả lời </a> |
                          <!-- <i class="fa fa-mail-reply "></i><a href="#"> Reply </a>| -->
                          <i class="fa fa-edit "></i><a href="#"> Chỉnh sửa bài viết </a>
                        </section>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endfor


            </section>
          </section>
        </section>


  </div>
</div>

@endsection





@section('script')
<script type="text/javascript">
$("[data-toggle=tooltip]").tooltip();
</script>
@endsection