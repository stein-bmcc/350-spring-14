These files are not WP specific. The html and CSS show how to setup and style columns in a responsive way.

The basic idea is that you 
1. divide the number of columns you want by the total columns
2. convert that number to a percent by moving the decimal to the right two places
3. set that number as the width of your element
4. set a padding on the left and right that is equal to 1/2 of the gutter you want.
5. Float the element (left usually but if it is the last in a row you can float right)

### Box Model
This system relies on using the border-box box model. make sure it is either set on the elements you're styling or just set it for the site like this (it's in style.css):

````
*{
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
````

## Example
If I want to set two elements div with .main class and div with .info class to be 8 out of 12 and 4 out of 12 columns respectively then I might style it like this
**CSS***
````
.main{
    width: 66.6666666%;;
    float: left;
    padding: 0 1%;
}

.info{
    width: 33.33333333%;;
    float: right;
    padding: 0 1%;
}
````

### Background Colors and Borders
Because this technique uses padding it means that each element runs right into the next. So if you want borders or padding around your elements and want the gutter to show, you need to add an extra div inside of the one with the grid styling and apply borders and background-color to that.

in the example below we are using the same .main and .info divs from above with the same grid css, but we are adding content divs inside of them and then showing the CSS for that

**HTML**

````
<div class="main">
    <div class="content">
        <!-- Your content here -->
    </div>
</div>

<div class="info">
    <div class="content">
        <!-- Your Content here -->
    </div>
</div>
````


**CSS**
In addition to the CSS above you would add this below. The padding is added to make sure the text is not right up against the border.
````
.content{
    background-color: #ddd;
    border: 1px solid #666;
    padding: 0.5em;
}
````

## Percentage Helper Chart
This chart shows percentages for some of the commmon column widths you might need. The way you read it is first look for how many total columns you have in a row (12, 6, 4, 3, 2) and then go down to the number of columns you want for the element you're styling. Then look to the right for the percentage. 

So if I wanted to make an element that was 5 columns out of 6 total I would set the width to 83.333333%

| 12 cols | 6 cols | 4 cols | 3 cols | 2 cols |             |
|---------|--------|--------|--------|--------|-------------|
| 12/12   | 6/6    | 4/4    | 3/3    | 2/2    | 100%        |
| 11/12   |        |        |        |        | 91.666666%  |
| 10/12   | 5/6    |        |        |        | 83.3333333% |
| 9/12    |        | 3/4    |        |        | 75%         |
| 8/12    |        | 4/6    | 2/3    |        | 66.666666%  |
| 7/12    |        |        |        |        | 58.333333%  |
| 6/12    | 3/6    | 2/4    |        | 1/2    | 50%         |
| 5/12    |        |        |        |        | 41.6666667% |
| 4/12    | 2/6    |        | 1/3    |        | 33.333333%  |
| 3/12    |        | 1/4    |        |        | 25%         |
| 2/12    | 1/6    |        |        |        | 16.6666667% |
| 1/12    |        |        |        |        | 8.333333%   |




