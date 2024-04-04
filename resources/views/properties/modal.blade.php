<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('New') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" placeholder="name@example.com"
                                    value="{{ old('name') }}">
                                <label for="name">{{ __('Property name') }}</label>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('ubication') is-invalid @enderror"
                                    id="ubication" name="ubication" placeholder="name@example.com"
                                    value="{{ old('ubication') }}">
                                <label for="name">{{ __('Ubication') }}</label>
                                @error('ubication')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                            placeholder="Leave a comment here" id="descriptionTextarea" rows="3"></textarea>
                        <label for="descriptionTextarea">{{ __('Description') }}</label>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <label for="img" class="input-group-text">{{ __('Upload picture') }}</label>
                        <input class="form-control" type="file" id="img" name="img">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="button" class="btn btn-primary">{{ __('Create') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
