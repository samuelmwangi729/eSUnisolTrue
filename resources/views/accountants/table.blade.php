<div class="table-responsive">
    <table class="table" id="accountants-table">
        <thead>
            <tr>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($accountants as $accountant)
            <tr>
                
                <td>
                    {!! Form::open(['route' => ['accountants.destroy', $accountant->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('accountants.show', [$accountant->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('accountants.edit', [$accountant->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
