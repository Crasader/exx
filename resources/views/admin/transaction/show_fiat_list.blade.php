<div class="d-card mt-20 mb-20">
    <table class="table table-bordered table-striped dataTable" >
        <thead>
            <tr>                
                <th>{{ trans('transaction.from') }}</th>
                <th>{{ trans('transaction.to') }}</th>
                <th>{{ trans('transaction.req_amt') }}</th>
                <th>{{ trans('transaction.ex_amt') }}</th>
                <th>{{ trans('admin_user.transaction_id') }}</th>                                     
                <th>{{ trans('transaction.date') }}</th>             
            </tr>
        </thead>
        <tbody>
        @if(count($transactions) > 0)
           @foreach($transactions as $transaction)
                @php
                $transaction_number='';
                      $response=json_decode(optional($transaction->transaction)->response,true);
                      if(count($response)>0)
                      {
                       $transaction_number= $response['transaction_number'];
                      }
                @endphp

                <tr>
                    <td>{{ $transaction->exchange_from_account->account_no }}</td>                   
                    <td>{{ $transaction->exchange_to_account->account_no }}</td>                      <td>{{ $transaction->from_amount }}</td>                       
                    <td>{{ $transaction->to_amount }}</td> 
                    <td>{{ $transaction_number }}</td> 
					<td>{{ $transaction->created_at->format('d/m/Y H:i:s') }}</td> 
                    
                   
                   
				</tr>
            @endforeach
        @else
        	<td colspan="12">{{ trans('myaccount.norecords') }}</td>
        @endif
        </tbody>
    </table>
</div>
 {{$transactions->links()}}