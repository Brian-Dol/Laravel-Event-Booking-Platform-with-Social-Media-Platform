@extends('frontlayout')
@section('content')

<!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('frontassets/img/banner-other.jpg') }}');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Booking</h2>
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

<div class="container my-4">
	<h3 class="mb-3">Event Booking</h3>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="text-danger">{{$error}}</p>
        @endforeach
    @endif

    @if(Session::has('success'))
        <p class="text-success">{{ session('success') }}</p>
        @if(Session::has('total_price'))
            <p class="text-success">Total Price: {{ session('total_price') }}</p>
        @endif
    @endif
    <div class="table-responsive">
        <form method="post" enctype="multipart/form-data" action="{{url('admin/booking')}}">
        @csrf
        <table class="table table-bordered">
                    
                    <tr>
                        <th>Event<span class="text-danger">*</span></th>
                        <td>

                            <!-- Events dropdown -->
                            <select name="event_id" class="form-control event-list">
                                <option>--- Select Event ---</option>
                                @foreach($events as $event) 
                                <option value="{{ $event->id }}">{{ $event->title }}</option>
                                @endforeach
                                <p>Price: <span class="show-event-price"></span></p>
                            </select>
                        
                        </td>

                    </tr>

                   
                    <tr>
                        <th>Total Adults<span class="text-danger">*</span></th>
                        <td> <input type="string" class="form-control" name="total_adults" />
                        </td>

                    </tr>

                    <tr>
                        <th>Total Children<span class="text-danger">*</span></th>
                        <td> <input type="string" class="form-control" name="total_children" />
                        </td>

                    </tr>
                <tr>
                    <td colspan="2">
                        @if(Session::has('data'))
                    	<input type="hidden" name="customer_id" value="{{session('data')[0]->id}}" />
                        @endif
                        <input type="hidden" name="total_price" class="event-price" value="" />
                    	<input type="hidden" name="ref" value="front" />
                        <input type="submit" class="btn btn-primary" />
                    </td> 
                </tr>
            </table>
        </form>
    </div>               
</div>

@section('scripts')
<script src="https://js.stripe.com/v3/"></script>

<!--<script type="text/javascript">
    $(document).ready(function(){
        $(".checkin-date").on('blur',function(){
            var _checkindate=$(this).val();
            // Ajax
            $.ajax({
                url:"{{url('admin/booking')}}/available-events/"+_checkindate,
                dataType:'json',
                beforeSend:function(){
                    $(".event-list").html('<option>--- Loading ---</option>');
                },
                success:function(res){
                    var _html='';
                    $.each(res.data,function(index,row){
                        _html+='<option data-price="'+row.event.price+'" value="'+row.event.id+'">'+row.event.title+'-'+row.eventtype.title+'</option>';
                    });
                    $(".event-list").html(_html);

                    var _selectedPrice=$(".event-list").find('option:selected').attr('data-price');
                    $(".event-price").val(_selectedPrice);
                    $(".show-event-price").text(_selectedPrice);

                }
            });
        });

        $(document).on("change",".event-list",function(){
            var _selectedPrice=$(this).find('option:selected').attr('data-price');
            $(".event-price").val(_selectedPrice);
            $(".show-event-price").text(_selectedPrice);
        });

    });
</script>-->

<script type="text/javascript">

    $(document).ready(function(){
    // Listen to change event of event-list select element
    $(document).on("change",".event-list",function(){
        var _selectedPrice=$(this).find('option:selected').attr('data-price');
        $(".event-price").val(_selectedPrice);
        $(".show-event-price").text(_selectedPrice);

        // Calculate total price based on selected event price and total number of attendees
        var _totalAdults = parseInt($("input[name='total_adults']").val()) || 0;
        var _totalChildren = parseInt($("input[name='total_children']").val()) || 0;
        var _totalPrice = _selectedPrice * (_totalAdults + _totalChildren);
        $(".total-price").text(_totalPrice);
        $("input[name='total_price']").val(_totalPrice);
    });

    // Listen to blur event of total adults input field
    $("input[name='total_adults']").on('blur',function(){
        var _selectedPrice=$(".event-list").find('option:selected').attr('data-price');

        // Calculate total price based on selected event price and total number of attendees
        var _totalAdults = parseInt($(this).val()) || 0;
        var _totalChildren = parseInt($("input[name='total_children']").val()) || 0;
        var _totalPrice = _selectedPrice * (_totalAdults + _totalChildren);
        $(".total-price").text(_totalPrice);
        $("input[name='total_price']").val(_totalPrice);
    });

    // Listen to blur event of total children input field
    $("input[name='total_children']").on('blur',function(){
        var _selectedPrice=$(".event-list").find('option:selected').attr('data-price');

        // Calculate total price based on selected event price and total number of attendees
        var _totalAdults = parseInt($("input[name='total_adults']").val()) || 0;
        var _totalChildren = parseInt($(this).val()) || 0;
        var _totalPrice = _selectedPrice * (_totalAdults + _totalChildren);
        $(".total-price").text(_totalPrice);
        $("input[name='total_price']").val(_totalPrice);
    });
});

    
</script>


@endsection
@endsection