# Blade Quicksand Icons

<a href="https://github.com/itliusha/blade-quicksand-icons/actions?query=workflow%3ATests">
    <img src="https://github.com/blade-ui-kit/blade-quicksand-icons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/itliusha/blade-quicksand-icons">
    <img src="https://img.shields.io/packagist/v/itliusha/blade-quicksand-icons" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/itliusha/blade-quicksand-icons">
    <img src="https://img.shields.io/packagist/dt/itliusha/blade-quicksand-icons" alt="Total Downloads">
</a>

让你可以在 Laravel blade 中轻松使用图标的扩展包 `Blade Quicksand Icons`。

阅读下文，以了解如何使用。
## 版本要求

- PHP 8.2 或更高版本
- Laravel 10.0 或更高版本

## 安装到 你的 Laravel 项目

```bash
composer require itliusha/blade-quicksand-icons
```

## 更新

更新时请参考 [`更新指南`](CHANGELOG.md) 进行更新。

## Blade Icons

Blade Quicksand Icons 背后使用了 Blade Icons. 参阅 [Blade Icons 自述文件](https://github.com/blade-ui-kit/blade-icons) 了解更多功能。 建议使用时 [开启图标缓存](https://github.com/blade-ui-kit/blade-icons#caching) ，以提升性能。

## 配置文件

`Blade Quicksand Icons` 还提供了使用 `Blade Icons` 的功能，比如：默认类、默认属性等。如果你想配置这些功能，需先发布 `blade-quicksand.php` 配置文件:

```bash
php artisan vendor:publish --tag=blade-quicksand-config
```

## 用法

可以使用自闭合的 blade 组件来引用图标, 它将会被转化成 SVG 类型的图标。

```blade
<x-quicksand-quicksand-logo />
```

当然，你还可以将类名传递给组件:

```blade
<x-quicksand-quicksand-logo class="w-6 h-6 text-gray-500" />
```

另外，你还可以使用内联样式来设置图标:

```blade
<x-quicksand-quicksand-logo style="color: #555" />
```


### 使用原始 SVG 图标

如果您想使用原始 SVG 图标作为资产，你需要先使用以下方式发布它们：

```bash
php artisan vendor:publish --tag=blade-quicksand --force
```

然后在你的视图中使用它们，如下:

```blade
<img src="{{ asset('vendor/blade-quicksand/quicksand-logo.svg') }}" width="10" height="10"/>
```

## 变更日志

查看此存储库中的 [CHANGELOG](CHANGELOG.md) 以了解所有最新更改。

## Maintainers

Blade Quicksand Icons 由 [Itliusha](https://github.com/itliusha) 开发和维护。


## License

Blade Quicksand Icons 是根据 [MIT 许可证](LICENSE.md) 授权的开源软件。
