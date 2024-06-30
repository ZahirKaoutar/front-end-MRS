<style type="text/css">
.alert{
    padding:30px;
    margin-bottom:30px;
    border:1px solid transparent;
    border-radius:4px;
}
.alert h4{
    margin-top:0;
    color:inherit;
}
.alert .alert-link{
    font-weight: bold;
}
.alert >p,
.alert >ul {
    margin-bottom:0;
}
.alert-dismissable{
    padding-right:35px;
}
.alert-dismissable .close{
    position:relative;
    top:-9px;
    right:-21px;
    color:inherit;
}
.alert-success {
    background-color:rgb(85, 157, 229);
    border-color:black;
    color:whitesmoke;
}
.alert-success hr{
    border-top-color:blue;
}
.alert-succes  .alert-link{
    color:burlywood;
}
.alert-info{
    background-color: white;
    border-color:blue;
    color:black;
}
.alert-info hr{
    border-top-color:blue;
}
.alert-info .alert-link{
    color:#blue;
}
.alert-warning{
    background-color: blue;
    border-color:red;
    color:green;
}
.alert-warning .alert-link{
border-top-color:antiquewhite;
}
.alert-warning hr{
    color:#66512c;
}

.alert-danger{
    background-color:#f2dede;
    border-color:#ebccd1;
    color:#a94442;

}
.alert-danger hr{
    border-top-color:#e4b9c0;

}
.alert-danger .alert-link{
    color:#843534;
}
</style>
@if(!empty(session('success')))
    <div class='alert alert-success' role='alert'>
        {{session('success')}}
    </div>
@endif

@if(!empty(session('error')))
    <div class='alert alert-danger' role='alert'>
        {{session('error')}}
    </div>
@endif
