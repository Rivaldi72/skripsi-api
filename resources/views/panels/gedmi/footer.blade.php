<!-- BEGIN: Footer-->
@if ($configData['mainLayoutType'] == 'horizontal' && isset($configData['mainLayoutType']))
    <footer
        class="footer {{ $configData['footerType'] }} {{ $configData['footerType'] === 'footer-hidden' ? 'd-none' : '' }} footer-light navbar-shadow">
    @else
        <footer
            class="footer {{ $configData['footerType'] }}  {{ $configData['footerType'] === 'footer-hidden' ? 'd-none' : '' }} footer-light">
@endif

</footer>
<!-- END: Footer-->
