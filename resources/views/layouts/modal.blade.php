<!-- Modal -->
<div
    class="modal fade"
    id="{{ $modal_id }}"
    tabindex="-1"
    role="dialog"
    aria-labelledby="{{ $modal_id }}Label"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <button
                    type="button"
                    class="close float-right"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-titsle" id="{{ $modal_id }}Label">
                    {{ $title }}
                </h5>
            </div>
            <form action="{{ $url }}" method="POST">
                @csrf
                @method($method)
                <div class="modal-body">@yield($modal_id)</div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                    >
                        الغاء
                    </button>
                    <button type="submit" class="btn btn-primary">تأكيد</button>
                </div>
            </form>
        </div>
    </div>
</div>
