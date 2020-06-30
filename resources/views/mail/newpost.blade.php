@component('mail::message')
# New post created

A new post has been published on your blog:

{{ $title }}

@component('mail::button', ['url' => config('app.url') . '/posts'])
View Blog Archive
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent