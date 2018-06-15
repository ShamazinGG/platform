<div class="form-group">
    <label class="control-label">{{trans('platform::common.filters.date_created')}}</label>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
            <input type="text" name="start_created_at" id='start_created_at' value="{{$request->get('start_created_at')}}" class="form-control"
             data-controller="components--datetime"
             data-components--datetime-allow-input="true"
             data-components--datetime-range="#end_created_at">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="end_created_at" id='end_created_at' value="{{$request->get('end_created_at')}}" class="form-control">
            </div>
        </div>
    </div>
</div>







