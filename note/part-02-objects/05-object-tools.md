# 对象工具
## PHP和包

### PHP包和命名空间
* PHP中可以使用 命名空间 和 文件系统 来完成包的功能。
* 使用 `namespace` 关键字来定义命名空间。
* 使用 `use` 来使用一个命名空间。
* 使用 `as` 来给引用的命名空间取别名。
* `require`, `require_once` 安全更好。
* `include`, `include_once` 性能更高。

### 自动加载
* 最好使用 composer 来完成自动加载和文件组织。
* `__autoload()` 可用用来定义一个自动加载规则，但是一个进程中只能定义一次。
* `spl_autoload_register()` 可用用来定义多个自动加载规则。

## 类函数和对象函数
* 实际开发中需要检测类是否存在、是否拥有将要使用的方法等，以避免可能存在的风险。
### 查找类
* 使用 `class_exists()` 但是不能判断是否需要参数。
* 也可以使用 `get_decleared_classes()` 获得脚本进程中定义的所有类的数组，只会返回在该处调用之前已经声明的类。

### 了解对象或类
* `get_class()` 可以获得一个类的名称。
* 使用 `instanceof` 来判断是否属于哪个家族类中的。

### 了解类中的方法
* `get_class_methods()` 可以传递类名，也可以传递对象。
* `is_callable([$obj, $method])` 检查类中方法是否能运行。
* `method_exists($obj, $method)` 判读类中是否有方法。
* 返回 `true` 不代表一定能使用 (public, protected, private)。

### 了解类中的属性
* `get_class_vars()` 函数接受类名作为参数，只显示 public 属性。

### 了解继承
* `get_parent_class('CLASSNAME')`。
* `is_subclass_of($obj, 'FATHER_CLASSNAME')`。
* 检查接口可用用  `instanceof` 关键字，也可以使用 `class_implements($obj)`。

### 方法调用
* `call_user_func('methods', $arg)`, `call_user_func([$obj, 'methods'], $arg)`。
* `call_user_func_array(..., $args)`，可用不用知道参数长度。

## 反射API
### 入门
* 反射类不仅仅被用于检查类，还可以用于审查类类、PHP中的元，根据命名规则创建一个调用模板类中方法的框架。
* 尽量使用反射类API，少用类和对象函数。

### 开始
* `new ReflectionClass(classname)` 实例化一个反射类。
* `Reflection::export($reflectionClass)` 输出类的相关信息。
* `var_dump` 和 `print_r` 是检测数据的利器，反射类是检测类和函数的利器。

### 检查类
* ReflectionClass::getName() 返回类名。
* ReflectionClass::isUserDefined(), ReflectionClass::isInternal()（用户定义 或者 系统内建）。
* ReflectionClass::isInterface()。
* ReflectionClass::isAbstract()。
* ReflectionClass::isFinal()。
* ReflectionClass::isInstantiable()。
* ReflectionClass::getMethod() 返回 ReflectionMethod 对象数组。

### 检查对象
* ReflectionMethod::getName()。
* ReflectionMethod::isInternal()。
* ReflectionMethod::isAbstract()。
* ReflectionMethod::isPublic()。
* ReflectionMethod::isProtected()。
* ReflectionMethod::isPrivate()。
* ReflectionMethod::isStatic()。
* ReflectionMethod::isFinal()。
* ReflectionMethod::isConstructor()。
* ReflectionMethod::returnsReference()。
* ReflectionMethod::getParameters() 返回 ReflectionParameter 对象数组。。

### 检查方法参数
* 可以利用 ReflectionParameter 来判断是否需要传递参数，传递的参数是什么类型的。

### 使用反射API
* 见 `code/part-02-objects/05-object-tools/04-reflection.php`。
