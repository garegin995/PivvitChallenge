<?php

namespace App\Http\Requests\Donations;

use App\Models\Campaign;
use App\Models\Donation;
use Illuminate\Foundation\Http\FormRequest;

class DonationCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'donorName' => 'required',
            'campaignID' => 'required|exists:' . Campaign::getTableName() . ',id',
            'amount' => 'required|integer'
        ];
    }
}
