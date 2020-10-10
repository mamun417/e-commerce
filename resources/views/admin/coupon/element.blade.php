<div class="form-group">
    <label>Coupon</label><span class="required-star"> *</span>
    <input name="coupon" value="{{ isset($update) ? $coupon->coupon : old('coupon') }}" type="text"
           placeholder="Enter coupon" class="form-control">

    @error('coupon')
    <span class="help-block m-b-none text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Amount</label><span class="required-star"> *</span>
    <input name="amount" value="{{ isset($update) ? $coupon->amount : old('amount') }}" type="number"
           placeholder="Enter amount" class="form-control">

    @error('amount')
    <span class="help-block m-b-none text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Amount Type</label><span class="required-star"> *</span>
    <select class="form-control" name="amount_type">
        <option value="">Select One</option>

        @php($check_selected_amount_type = isset($update) ? $coupon->amount_type : old('amount_type'))

        @foreach(\App\Models\Coupon::AMOUNT_TYPES as $key => $type)
            <option {{ $check_selected_amount_type == $type ? 'selected' : ''}} value="{{ $key }}">
                {{ $type }}
            </option>
        @endforeach
    </select>

    @error('amount_type')
    <span class="help-block m-b-none text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Expire Date</label>
    <input name="expire_date" value="{{ isset($update) ? $coupon->expire_date : old('expire_date') }}" type="date"
           placeholder="Enter expire date" class="form-control">

    @error('expire_date')
    <span class="help-block m-b-none text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Specific Users</label>
    <input name="user_ids" value="{{ isset($update) ? $coupon->user_ids : old('user_ids') }}" type="text"
           placeholder="Enter users" class="form-control">

    @error('user_ids')
    <span class="help-block m-b-none text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group m-b-none">
    <a href="{{ route('admin.coupons.index') }}"
       class="btn btn-sm btn-danger"><strong>Cancel</strong></a>
    <button class="btn btn-sm btn-primary" type="submit"><strong>{{ isset($update) ? 'Update' : 'Submit' }}</strong>
    </button>
</div>
