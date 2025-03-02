@component('mail::message')
    # Vendor Upload Error Report

    Some rows in your uploaded vendor CSV file contained errors and could not be processed.
    Please find the attached file with the problematic rows.

    ## **How to Fix the Issues?**
    - Open the attached **`Failed_Vendors.csv`** file.
    - Review the **last column**, which contains the error messages.
    - Correct the errors and re-upload the file.

    @component('mail::button', ['url' => config('app.url')])
        Go to Dashboard
    @endcomponent

    Thanks,
    **{{ config('app.name') }} Team**
@endcomponent
