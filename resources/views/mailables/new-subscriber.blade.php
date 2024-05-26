<x-email::newsletter
    :theme="$theme"
    :entity="$course"
>
    <x-email::paragraph :theme="$theme">Hello!</x-email::paragraph>

    <x-email::paragraph :theme="$theme">Thank you for subscribing to <b>{{ $course->name }}</b>!</x-email::paragraph>

    <x-email::button :theme="$theme">Your coucher code: PIONEER</x-email::button>

    <x-email::sub-line :theme="$theme">This voucher code will be active 48h after the course launch</x-email::sub-line>

</x-email::newsletter>
