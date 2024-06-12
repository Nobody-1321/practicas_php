#include <iostream>

void fun(int a) {
    std::cout << "paso por valor\n";
    std::cout << "valor de a: " << a << std::endl;
    std::cout << "direccion de a: " << &a << std::endl;
    a = 10;
      std::cout << "-------------------\n";
}

void func(int &a) {
    std::cout << "paso por referencia\n";
    std::cout << "valor de a: " << a << std::endl;
    std::cout << "direccion de a: " << &a << std::endl;
    a = 20;
    std::cout << "-------------------\n";
}

int main() {
    
    
    int a = 15;
    float b = 3.14;
    double c = 3.1416;
    
    std::cout << "valor de a: " << a << std::endl;
    std::cout << "direccion de a: " << &a << std::endl;
    std::cout << "-------------------\n";

    fun(a);
    func(a);

    std::cout << "valor de a: " << a << std::endl; 
    std::cout << "direccion de a: " << &a << std::endl;

    return 0;
}