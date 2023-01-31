# **- Go Programming - Golang Tutorial :**

## Introduction :

> - Go is youngest prog Languages developed at Google in 2007.<br>
> - Open-sourced in 2009.

- ### Why go ?

  ![alt](img\4.PNG)
  ![alt](img\snap.png)

- ### Main use case of Go :
  > - Write a performant Apps .<br>
  > - Running on modern scaled, distributed systems typically on Cloud platforms.

---

## Golang links :

- [golangbridge.org](https://golangbridge.org) : go community .<br>
- [play.golang.org](https://play.golang.org) : go online IDE .

---

## Configs & Files :

    Go Dir location on linux OS : "/usr/local/go"
    # Env variables.
    GOROOT =/usr/local/go
    PATH =$PATH:$GOROOT/bin
    # Use to locate additional lib location you may download it.
    GOPATH =/home/~/myGoLib

<center>

![Bashrc](img\3.PNG)

</center>

> When you install a new lib from github for example should place it in "/home/~/myGoLib" to be detected by Go automatically .

<br>

---

<br>

## Code Syntax :

```go
package main
import(
	"fmt"
)

/*
* comment
*/

func main(){
   //comment

	fmt.Println("Hello world From Golang")
}
```

---

<br>

## Running a Golang code with terminal :

    /* go run /codePath */
    go run .\hello.go

---

<br>

## You can also build the app and install it in the bin dir :

    go build .\hello.go
    go install .\hello.exe

---

<br>

## Variables :

### 1- Declaration :

</br>

> **- How to declare a vars in Go language :**

```go
// When you don't need to specific a initiate the variable
var num int
num = 72
//
var j int = 34
// When you don't the type of the variable
var k := 12
```

<br>

> ### **- Global scope :**

```go
package main

import "fmt"
/*

*/
var numb int = 22

func main(){
  	fmt.Printf("%v , type : %T", numb, numb)
}
```

    	- Printf : it's allow to print out strings with formatting.
    	- %v : for the value.
    	- %T : print the type of the value.

> - Or you can declare variables as blocks :

```go
package main

import "fmt"
/*

*/
var (
	count int
)

var(
	carUID int = 253
	carOwner := "Aziz"
	carLocation := "B2"
)

func main(){
  	fmt.Printf("%v , type : %T\n", count, count)
	fmt.Printf("%v , type : %T\n", carUID, carUID)
  	fmt.Printf("%v , type : %T\n", carOwner, carOwner)
  	fmt.Printf("%v , type : %T\n", carLocation, carLocation)
}
```

---

<br>

> ### **- Local scope :**

```go
package main

import "fmt"


func main(){
  	var numb int = 22
  	fmt.Printf("%v , type : %T", numb, numb)
}
```

---

<br>

> ### **- Shadowing :**

```go
package main

import "fmt"


var numb int = 22 // global numb = 22

func main(){
  	var numb int = 42 // shadow local numb = 42
  	fmt.Printf("%v , type : %T", numb, numb)
}
```

> **Warning** :
> - You can not allow to declare same var twice in the same Scope .<br>
> - If you declare a Vars must be used otherwise that make an error .

---

<br>

### 2- Visibility :

```go
package main
import "fmt"

var numb int = 50 //
var Numb int =70 //

func main(){


}

```

---

<br>

### 3- Type Conversions :

---

### 4- To wrap-up :

![image](img\image.PNG)
![alt](img\2e.PNG)

### 2- Primitive types :

- Boolean :
  `var status bool = true`
- Numeric :<br>

  - integer : `var numb int = 21`<br>

        int8  from -127 to 127
        int16  from -32_768 to 32_767
        int32  from -2_147_483_648 to 2_147_483_647
        int64  ..

  - float : `var fNumb float32 = 55.02` <br>
  - Long : `var num2 unit16 = 254 `

- String :`var str string = "hello 47 "`

---

<br>

# 01:01:00

| ID : | Prog Language : | Domain:    | Rate/10 : |
| ---- | --------------- | ---------- | --------- |
| 1    | java            | Desktop    | 7.5       |
| 2    | PHP             | Web-server | 6         |
| 3    | Js              | Web-front  | 4.5       |
| 4    | Go              | DevOps     | 1         |

