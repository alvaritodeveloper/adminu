<x-app-layout>
    <div class="container-fluid">
        @session('success')
            <div class="alert alert-success" role="alert">
                {{ __($value )}}
            </div>
        @endsession
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold">{{ __('Manage Properties') }}</p>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-end mb-3">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fas fa-plus-circle"></i> {{ __('New') }}
                        </button>
                    </div>
                </div>
                <div class="table-responsive table mt-2" id="dataTable" role="grid"
                    aria-describedby="dataTable_info">
                    <table class="table table-hover my-0 align-middle" id="dataTable">
                        <thead>
                            <tr>
                                <th class="text-bg-primary">{{ __('Name') }}</th>
                                <th class="text-bg-primary">{{ __('Description') }}</th>
                                <th class="text-bg-primary">{{ __('Ubication') }}</th>
                                <th class="text-bg-primary text-center">{{ __('Options') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($properties as $property)
                                <tr>
                                    <td><img class="rounded me-2" width="60" height="60"
                                            src="/img/avatars/avatar1.jpeg">{{ $property->name }}</td>
                                    <td>{{ $property->description }}</td>
                                    <td>{{ $property->ubication }}</td>
                                    <td>
                                        <div class="m-2 text-center">
                                            <div class="dropdown no-arrow">
                                                <button
                                                    class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item text-primary" href="#">
                                                            <i class="fas fa-edit"></i> {{ __('Update') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('properties.destroy', $property->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="dropdown-item text-primary">
                                                                <i class="fas fa-trash"></i> {{ __('Delete') }}
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    {!! $properties->links() !!}
                </div>
            </div>
        </div>
    </div>
    <x-slot name="modal">
        @include('properties.modal')
    </x-slot>
</x-app-layout>
