<div class="table-responsive">
    <table class="table" id="miscs-table">
        <thead>
            <tr>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($miscs as $misc)
            <tr>
                
                <td>
                    {!! Form::open(['route' => ['miscs.destroy', $misc->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('miscs.show', [$misc->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('miscs.edit', [$misc->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
