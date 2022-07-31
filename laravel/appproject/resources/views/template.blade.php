{{--
What is blade template

The Blade is a powerful templating engine in a Laravel framework. 
The blade allows to use the templating engine easily, 
and it makes the syntax writing very simple. 

The blade templating engine provides its own structure such as conditional 
statements and loops. 
To create a blade template, you just need to create a view file and save it with a 
.blade.php extension instead of .php extension. 
--}}

<h1>Blade Template</h1>

<?php
echo "<h1>Hello</h1>";
?>

<h1> {{"Hi hello"}} <h1> 
<h1>{{$name="Raj"}}</h1>
<h1>{{5+5}}</h1>

{{-- Comment in laravel by blade templating   --}} 
@php
$user_arr=array("Raj","Mahesh")
@endphp
{{count($user_arr)}}

{{--
Blade Conditional Directives
@php @endphp
@if , @elseif ,@else and @endif  
@unless , @endunless // inverse of if / opposite of if 
@isset @endisset  
 --}} 

@php $name="nagar" @endphp
@if($name=="Raj")
<h1>Hi my name is {{$name}}</h1>
@else
<h1>Unknown</h1>	
@endif


@if($name=="Raj")
<h1>Hi my name is {{$name}}</h1>
@elseif($name=="Mahesh")
<h1>Hi my name is {{$name}}</h1>
@else
<h1>Unknown</h1>	
@endif

<!-- if(!($name==nagar)) -->
@unless($name=="nagar")
  <p>{{'name not nagar'}}</p>
@else
 <p>{{'name is nagar'}}</p>
@endunless


@for($i=1;$i<=10;$i++)
<h4>{{$i}}</h4>	
@endfor

<?php $z = 0; ?>
@while ($z < 3)
  {{$z}}
<?php $z++ ?>
@endwhile

<p>We can use Foreach loop in blade template </p>

@php $data=['sam','raj','mahesh'] @endphp
@foreach($data as $d)
<h4>{{$d}}</h4>
@endforeach