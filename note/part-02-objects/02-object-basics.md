# 对象基础

## 类和对象
### 编写第一个类
创建一个 ShopProduct 类 `class ShopProduct {}`。

### 第一个对象
* 类是生成对象的模板，对象则是由模板所构造的数据（对象是类的 `实例`）。
* 使用 new 操作符来生成一个对象。
* PHP 中把对象当 字符串处理 会报错，除非定义了 `__toString()` 方法。

## 设置类中的属性
* 类中可以定义特定的变量，这个变量称为 `属性` 或者 `成员变量`，用来存放对象之间不同的数据。
* 属性在声明和赋值前，要增加一个代表可见性的关键字(public, protected or private)，决定了作用域。
* 使用 `->` 字符连接对象变量和属性名来访问属性变量。
* 禁止动态添加属性，因为这样会使得对象变得难以预测。并且动态修改属性时，如果拼写错误并不会得到报错提示，这是很危险的。

## 使用方法
* 类方法可以让对象执行任务，类方法声明与属性一样，需要在 `function` 关键词前声明。
* 类方法只能在类中声明。
* 类方法调用方式和类属性一样。

### 创建构造函数
* 创建对象时，构造方法 `__construct()`  会被自动调用。
* 构造方法可以用来确保必要的属性被设置。
* 使用构造函数使得面向对象编程变得可预测。

## 参数和类型
### 基本类型
* PHP 是一种弱类型语言，变量不需要声明为特定的数据类型（是一种便利，也是一种麻烦）。
* 基本类型检查函数 is_bool(), is_integer(), is_double(), is_string(), is_object(), is_array(), is_resource(), is_null()。
* 在注释中给出属性的类型，或者是在函数中进行属性类型的判断。
* 不能完全信任客户端程序猿，应该始终考虑如何在方法中处理他们输入的无用信息。

### 获得提示：对象类型
* 参数默认情况下也可以包含任何类型的对象。
* 使用 类型提示（type hint），把类名简单的放到方法参数前，就能对 对象类型 和 数组 进行限制。
* 对于基本类型，只能使用函数检查。

## 继承
* 继承是从一个基类得到一个或多个派生类的机制。
* 子类将继承父类的特性，这些特性由属性和方法组成。
* 子类可以增加父类（超类。superclass）之外的新功能。
* 子类可以看成父类扩展。

### 继承问题
* 强行把不同类型的字段合并到一个类中，会导致对象的臃肿，产生冗余的属性和方法。
* 如果不继承父类，而是直接拆分多个类，可能会造成代码的重复，导致如果需要任何改变的时候会无法及时同步所有相关类。
* 根据类型继承父类后，拆分出多个类。

### 使用继承
* 在子类中定义构造方法时，需要传递参数给父类的构造方法，否则构造的对象将不完整。
* 调用父类中的方法可以使用 `parent` 关键字。
* 使用连接符 `::` 来连接 `parent`。

### public, private, protected: 管理类访问
* 在任何地方都可以访问 `public` 属性和方法。
* 只能在当前类中访问 `private` 方法或属性，子类不能访问。
* 只能在当前类或子类中访问 `protected` 方法或属性，其他外部代码无权访问。
* 通过阻止客户访问特定的属性，访问控制也有助于预防代码中的 bug。
* 最好是严格控制可访问性，最好将类属性初始化为 `private` 或 `protected`，需要时再放松限制条件。
* 类方法大多数都可以是 `public`，不确定的情况下就限制下。
#### 访问方法
* 使用 getter, setter 来访问和过滤属性。
