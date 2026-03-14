<?php
$locales = [
    'en' => ['name' => 'English', 'flag' => '🇺🇸'],
    'id' => ['name' => 'Bahasa Indonesia', 'flag' => '🇮🇩'],
    'ar' => ['name' => 'العربية', 'flag' => '🇸🇦'],
    'es' => ['name' => 'Español', 'flag' => '🇪🇸'],
    'fr' => ['name' => 'Français', 'flag' => '🇫🇷'],
    'ja' => ['name' => '日本語', 'flag' => '🇯🇵'],
    'ru' => ['name' => 'Русский', 'flag' => '🇷🇺'],
    'hi' => ['name' => 'हिन्दी', 'flag' => '🇮🇳'],
    'it' => ['name' => 'Italiano', 'flag' => '🇮🇹'],
    'zh_CN' => ['name' => '简体中文', 'flag' => '🇨🇳'],
    'zh_TW' => ['name' => '繁體中文', 'flag' => '🇹🇼'],
];
$currentLocale = app()->getLocale();
$currentLang = $locales[$currentLocale] ?? $locales['id'];
$uniqueId = 'locale-' . uniqid();
?>

<div class="locale-switcher-wrapper" data-locale-switcher="true">
    <!-- Dropdown Toggle Button -->
    <button class="locale-toggle-btn" data-locale-btn="true" type="button" aria-label="Switch Language" aria-expanded="false" onclick="this.parentElement.querySelector('[data-locale-menu]').classList.toggle('show'); console.log('Inline click fired, show class added:', this.parentElement.querySelector('[data-locale-menu]').classList.contains('show'));">
        <span class="locale-flag"><?php echo e($currentLang['flag']); ?></span>
        <span class="locale-name"><?php echo e($currentLang['name']); ?></span>
        <i class="fas fa-chevron-down"></i>
    </button>

    <!-- Dropdown Menu -->
    <ul class="locale-dropdown-menu" data-locale-menu="true" role="listbox">
        <?php $__currentLoopData = $locales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li role="option" aria-selected="<?php echo e($code === $currentLocale ? 'true' : 'false'); ?>">
                <a href="<?php echo e(route('locale.switch', $code)); ?>" class="locale-option <?php if($code === $currentLocale): ?> active <?php endif; ?>" data-locale="<?php echo e($code); ?>" onclick="handleLocaleSwitch(event, '<?php echo e(route('locale.switch', $code)); ?>')">
                    <span class="locale-flag" aria-hidden="true"><?php echo e($lang['flag']); ?></span>
                    <span class="locale-name"><?php echo e($lang['name']); ?></span>
                    <?php if($code === $currentLocale): ?>
                        <i class="fas fa-check"></i>
                    <?php endif; ?>
                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

<style>
:root {
    --primary-color: #ff6b35;
    --border-light: #e6e9ee;
    --bg-hover: #f3f4f6;
    --text-primary: #374151;
    --text-muted: #6b7280;
}

.locale-switcher-wrapper {
    position: relative;
    display: inline-block;
}

.locale-toggle-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 16px;
    background: white;
    border: 1px solid var(--border-light);
    border-radius: 8px;
    cursor: pointer;
    font-size: 13px;
    font-weight: 600;
    color: var(--text-primary);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    min-height: 40px;
}

.locale-toggle-btn:hover {
    background: var(--bg-hover);
    border-color: #d1d5db;
    transform: translateY(-1px);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.locale-toggle-btn:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1);
}

.locale-toggle-btn.active {
    border-color: var(--primary-color);
    background: rgba(255, 107, 53, 0.05);
}

.locale-toggle-btn .locale-flag {
    font-size: 20px;
    display: inline-block;
    line-height: 1;
}

.locale-toggle-btn .locale-name {
    max-width: 150px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.locale-toggle-btn .fa-chevron-down {
    font-size: 11px;
    margin-left: 4px;
    transition: transform 0.3s ease;
}

.locale-toggle-btn.active .fa-chevron-down {
    transform: rotate(180deg);
}

/* Dropdown Menu */
.locale-dropdown-menu {
    position: absolute;
    top: calc(100% + 8px);
    right: 0;
    list-style: none;
    margin: 0;
    padding: 8px 0;
    background: white;
    border: 1px solid var(--border-light);
    border-radius: 12px;
    min-width: 240px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
    display: none;
    z-index: 1000;
    max-height: 420px;
    overflow-y: auto;
    opacity: 0;
    transform: translateY(-8px);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    pointer-events: none;
}

.locale-dropdown-menu.show {
    display: block;
    opacity: 1;
    transform: translateY(0);
    pointer-events: auto;
}

.locale-dropdown-menu li {
    margin: 0;
    padding: 0;
}

.locale-option {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 16px;
    color: var(--text-primary);
    text-decoration: none;
    transition: all 0.2s ease;
    font-size: 13px;
    font-weight: 500;
}

.locale-option:hover {
    background: var(--bg-hover);
    color: var(--primary-color);
}

.locale-option.active {
    background: rgba(255, 107, 53, 0.08);
    color: var(--primary-color);
}

.locale-option .locale-flag {
    font-size: 22px;
    min-width: 28px;
    text-align: center;
    line-height: 1;
}

.locale-option .locale-name {
    flex: 1;
}

.locale-option .fa-check {
    color: var(--primary-color);
    font-size: 13px;
    font-weight: bold;
}

/* Scrollbar styling for dropdown */
.locale-dropdown-menu::-webkit-scrollbar {
    width: 6px;
}

.locale-dropdown-menu::-webkit-scrollbar-track {
    background: transparent;
}

.locale-dropdown-menu::-webkit-scrollbar-thumb {
    background: #d1d5db;
    border-radius: 3px;
}

.locale-dropdown-menu::-webkit-scrollbar-thumb:hover {
    background: #9ca3af;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .locale-toggle-btn {
        padding: 8px 12px;
        font-size: 12px;
        min-height: 36px;
    }

    .locale-toggle-btn .locale-flag {
        font-size: 18px;
    }

    .locale-toggle-btn .locale-name {
        display: none;
    }

    .locale-dropdown-menu {
        min-width: 200px;
        right: -10px;
        max-height: 350px;
    }

    .locale-option {
        padding: 10px 12px;
        font-size: 12px;
        gap: 10px;
    }

    .locale-option .locale-flag {
        font-size: 20px;
        min-width: 24px;
    }
}

@media (max-width: 480px) {
    .locale-dropdown-menu {
        min-width: 180px;
    }
}

/* Dark mode support (optional) */
@media (prefers-color-scheme: dark) {
    .locale-toggle-btn {
        background: #1f2937;
        border-color: #374151;
        color: #f3f4f6;
    }

    .locale-toggle-btn:hover {
        background: #374151;
    }

    .locale-dropdown-menu {
        background: #1f2937;
        border-color: #374151;
    }

    .locale-option {
        color: #f3f4f6;
    }

    .locale-option:hover {
        background: #374151;
    }

    .locale-option.active {
        background: rgba(255, 107, 53, 0.15);
    }
}
</style>

<script>
// Global function to handle locale switch
function handleLocaleSwitch(event, url) {
    event.preventDefault();
    console.log('[LocaleSwitcher] Switching locale to URL:', url);
    // Redirect to the locale switch route, which will redirect back to current page with new locale
    window.location.href = url;
}

(function() {
    // Initialize locale switcher functionality
    function initLocaleSwitcher() {
        // Find all locale switchers
        const switchers = document.querySelectorAll('[data-locale-switcher="true"]');
        
        console.log('[LocaleSwitcher] Found ', switchers.length, ' switchers');
        
        if (switchers.length === 0) {
            console.warn('[LocaleSwitcher] No switchers found with data-locale-switcher="true"');
            return;
        }

        switchers.forEach(function(wrapper, index) {
            const btn = wrapper.querySelector('[data-locale-btn="true"]');
            const menu = wrapper.querySelector('[data-locale-menu="true"]');

            console.log('[LocaleSwitcher] Switcher ' + index + ' - Button found:', !!btn, 'Menu found:', !!menu);

            if (!btn || !menu) {
                console.error('[LocaleSwitcher] Missing button or menu for switcher ' + index);
                return;
            }

            // Toggle on button click
            btn.addEventListener('click', function(e) {
                console.log('[LocaleSwitcher] Button clicked!');
                e.preventDefault();
                e.stopPropagation();
                
                const isOpen = menu.classList.contains('show');
                console.log('[LocaleSwitcher] Menu is currently:', isOpen ? 'open' : 'closed');

                // Close other menus
                document.querySelectorAll('[data-locale-menu="true"].show').forEach(function(otherMenu) {
                    if (otherMenu !== menu) {
                        otherMenu.classList.remove('show');
                        const otherBtn = otherMenu.parentElement.querySelector('[data-locale-btn="true"]');
                        if (otherBtn) otherBtn.classList.remove('active');
                    }
                });

                // Toggle this menu
                if (isOpen) {
                    menu.classList.remove('show');
                    btn.classList.remove('active');
                    btn.setAttribute('aria-expanded', 'false');
                    console.log('[LocaleSwitcher] Menu closed');
                } else {
                    menu.classList.add('show');
                    btn.classList.add('active');
                    btn.setAttribute('aria-expanded', 'true');
                    console.log('[LocaleSwitcher] Menu opened, show class added:', menu.classList.contains('show'));
                }
            });

            // Close on outside click
            document.addEventListener('click', function(e) {
                if (!wrapper.contains(e.target)) {
                    menu.classList.remove('show');
                    btn.classList.remove('active');
                    btn.setAttribute('aria-expanded', 'false');
                }
            });

            // Close on Escape
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && menu.classList.contains('show')) {
                    menu.classList.remove('show');
                    btn.classList.remove('active');
                    btn.setAttribute('aria-expanded', 'false');
                    btn.focus();
                }
            });
        });
    }

    // Run when DOM is ready
    if (document.readyState === 'loading') {
        console.log('[LocaleSwitcher] DOM still loading, waiting for DOMContentLoaded');
        document.addEventListener('DOMContentLoaded', initLocaleSwitcher);
    } else {
        console.log('[LocaleSwitcher] DOM already loaded, initializing immediately');
        initLocaleSwitcher();
    }

    // Also run on dynamic content load
    window.addEventListener('load', function() {
        console.log('[LocaleSwitcher] Window loaded event fired, reinitializing');
        initLocaleSwitcher();
    });
})();
</script>
<?php /**PATH D:\work\app\dokterdito_app\resources\views\components\locale-switcher.blade.php ENDPATH**/ ?>