<div class='btn-group'>
    {{-- <a href="{{ route('users.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="fa fa-eye"></i>
    </a> --}}
    @if (auth()->user()->can('update-brand'))
        <a href="{{ route('brands.edit', $id) }}" class='btn btn-default btn-xs'>
            <i class="fa fa-edit"></i>
        </a>
    @endif
</div>
