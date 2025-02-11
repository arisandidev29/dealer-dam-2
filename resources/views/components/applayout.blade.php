@props([
    "header" => true,
    'footer' => true 
    ])

<!doctype html>
<html lang="en" class="dark">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title></title>
        @vite('resources/css/app.css')
        
        <script src="https://kit.fontawesome.com/6d82e3b00d.js" crossorigin="anonymous"></script>

        {{-- alphine js --}}

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <script>
            if (
                localStorage.theme === "dark" ||
                (!("theme" in localStorage) &&
                    window.matchMedia("(prefers-color-scheme: dark)").matches)
            ) {
                document.documentElement.classList.add("dark");
            } else {
                document.documentElement.classList.remove("dark");
            }

            // Whenever the user explicitly chooses light mode
            localStorage.theme = "light";

            // Whenever the user explicitly chooses dark mode
            localStorage.theme = "dark";

            // Whenever the user explicitly chooses to respect the OS preference
            localStorage.removeItem("theme");
        </script>
    </head>
    <body class="grid min-h-screen">
        @if($header)
          <x-header />
        @endif
        {{ $slot }}

        @if($footer)
            <x-footer />
        @endif
    </body>
</html>
