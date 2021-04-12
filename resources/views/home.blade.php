<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    .box-shadow {
    box-shadow: 0 0.25rem 0.75rem rgb(0 0 0 / 5%);
}
.border-bottom {
    border-bottom: 1px solid #e5e5e5;
}
@media (min-width: 768px)
.pl-md-4, .px-md-4 {
    padding-left: 1.5rem!important;
}
@media (min-width: 768px)
.pr-md-4, .px-md-4 {
    padding-right: 1.5rem!important;
}
.p-3 {
    padding: 1rem!important;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}
@media (min-width: 768px)
.flex-md-row {
    -webkit-box-orient: horizontal!important;
    -webkit-box-direction: normal!important;
    -ms-flex-direction: row!important;
    flex-direction: row!important;
}
.align-items-center {
    -webkit-box-align: center!important;
    -ms-flex-align: center!important;
    align-items: center!important;
}
.flex-column {
    -webkit-box-orient: vertical!important;
    -webkit-box-direction: normal!important;
    -ms-flex-direction: column!important;
    flex-direction: column!important;
}
.d-flex {
    display: -webkit-box!important;
    display: -ms-flexbox!important;
    display: flex!important;
}
.border-bottom {
    border-bottom: 1px solid #dee2e6!important;
}
.bg-white {
    background-color: #fff!important;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}
    </style>
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal"> {{__('lang.Company_name')}}</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">{{__('lang.Features')}}</a>
        <a class="p-2 text-dark" href="#">{{__('lang.Enterprise')}}</a>
        <a class="p-2 text-dark" href="#">{{__('lang.Support')}}</a>
        <a class="p-2 text-dark" href="#">{{__('lang.Pricing')}}</a>
      </nav>
      <a class="btn btn-outline-primary" href="#">{{__('lang.Sign_up')}}</a>
    </div>
</body>
</html>