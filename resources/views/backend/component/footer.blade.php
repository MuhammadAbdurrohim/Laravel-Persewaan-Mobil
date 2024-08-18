<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; {{ optional(App\Setting::where('slug', 'nama-toko')->first())->description ?? 'Default Store Name' }} {{ date('Y') }}</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
