@component('mail::message')
# Order CDomplite 

I just love **bold text**.
I think I'll use it to format all of my documents from now on.

1. First item
2. Second item
3. Third item
    1. Indented item
    2. Indented item
4. Fourth item

- First item
- Second item
- Third item
    - Indented item
    - Indented item
- Fourth item


@component('mail::button', ['url' => 'https://www.google.com/'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
