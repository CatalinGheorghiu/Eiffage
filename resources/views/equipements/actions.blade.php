@can('delete-users')
    <a class="btn btn-primary" href="{{ route('equipements.show', $id) }}"><i class="fas fa-eye"></i></a>
    <a class="btn btn-success" href="{{ route('equipements.edit', $id) }}"><i class="fas fa-edit"></i></i></a>

    <form action="{{ route('equipements.destroy', $id) }}" method="POST" class="d-inline">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></i></button>
    </form>
@endcan
