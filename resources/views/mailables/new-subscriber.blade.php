<x-email::newsletter title="Thanks for subscribing to {{ $course->name }}"
                     themeColor="#3869D4"
                     secondaryColor="#22BC66"
                     dangerColor="#FF6136">
    <x-slot name="preheader">
        Thanks for subscribing to {{ $course->name }}!
    </x-slot>

    <x-slot name="header">
        <x-email::header-logo src="{{ eduka_url($course->filename_main_logo) }}" alt="{{ $course->domain }}" width="150" height="50" />
        <!-- Alternatively, you could use the header title component like this: -->
        <!-- <x-email::header-title color="#333" href="https://example.com">[Product Name]</x-email::header-title> -->
    </x-slot>

    <x-email::paragraph>
        <strong>Hi there!</strong><br>
    </x-email::paragraph>

    <x-email::paragraph>
        Thanks a lot for subscribing for my upcoming course, {{ $course->name }}. Here is a little gift to show my appreciation.
    </x-email::paragraph>

    <x-email::call-to-action heading="10% off voucher"
                             body="Valid for the first week after the launch date"
                             button_url="#"
                             button_text="Voucher code: PIONEER"
                             button_bg_color="#22BC66">
    </x-email::call-to-action>

    <x-email::paragraph>
        I will keep you updated closer to the launch date.
    </x-email::paragraph>


    <x-slot name="footer">
        <x-email::footer><a target="_new" href="https://{{ $course->domain }}">{{ $course->name }}</a>. All rights reserved.</x-email::footer>
    </x-slot>
</x-email::newsletter>
