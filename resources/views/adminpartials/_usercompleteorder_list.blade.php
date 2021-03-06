<div class="tab-container">
	<h3>{{ trans('admin_user.complete_order_list') }}</h3>
	<table class="table table-bordered" id="completeorderlistsdatatable">
	    <thead>
		    <tr>

		        <th>{{ trans('myaccount.time') }} </th>
                <th>{{ trans('myaccount.marketname') }}</th>
            <!--     <th>{{ trans('myaccount.transaction_type') }}</th> -->
                <th>{{ trans('myaccount.order_price') }}</th>
                <th>{{ trans('myaccount.order_quantity') }}</th> 
                <th>{{ trans('myaccount.fee') }}</th>

                  <th>{{ trans('myaccount.totalamount') }}</th>  
                         
                
		    </tr>
	    </thead>
	    <tbody>
		       	@if(count($completeorderlists) > 0)
           @foreach($completeorderlists as $buyorder)
                <tr>
                    <td>{{ $buyorder->created_at }}</td> 

                    <td>{{ $buyorder->tocurrency->name }}</td>

                    <td>{{ $buyorder->amount }}
               
                         {{$buyorder->fromcurrency->name }}

                    </td>                       
                    <td>{{ $buyorder->quantity }} {{$buyorder->tocurrency->name }}</td> 
                    
                    <td>{{ $buyorder->buyorder->fee_total }}</td> 

                    <td>{{ $buyorder->buyorder->total_amount }}</td> 

				</tr>
            @endforeach
	     	@endif
	    </tbody>
	</table>
 </div>
 
 @push('scripts')
<script>
    $(document).ready(function(){
        $('#completeorderlistsdatatable').DataTable();

    });
</script>
@endpush