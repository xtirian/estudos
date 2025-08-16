# Create home component

This lesson demonstrates how to create a new component for a Angular App.

## Conceptual preview of angular component

Angular apps are built around componnts, which are Angular's uilding blocks. Components contain the code, HTML layout, and CSS style information that provide the function and appearace of an element in the app. In Angular, components can contain other components. An app's functions and appearance can be divided and partitioned int o components.

In Angular, components have metadata that define its properties. When you create your `home`, you use these properties: 

* `selector`: to describe how Angular refers to the component in templates.
* `standalone`: to describe whether the component requires a `NgModule`.
* `imports`: to describe the component's dependencies.
* `template`: to describe the component's HTML markup and layout.
* `styleUrls`: to list the URLs of te CSS files that the component uses in an array.

## Create the `Home`

To create a component, us the **Terminal** pane of your IDE, opens the project directory and runs the command to create a component:

```bash
$ ng generate component home
```

## Add the new component to your app's layout 

After create the component, you'll need to add the new component, `Home` to your apps root component, `App`, so that it displays in your app's layout.

1- Open `app.ts` in the editor.
2- In `app.ts`, import `Home`  by adding this line to the file level imports.

```ts 
import {Home} from './home/home';
```

3- In `app.ts`, in `@Component`, update the `imports` array property and add `Home`.

```ts 
imports: [Home],
```

4- In `app.ts`, in `@component`, update the `template` property to include the following HTML code.

```ts
template: `
  <main>
    <header class="brand-name">
      <img class="brand-logo" src="/assets/logo.svg" alt="logo" aria-hidden="true" />
    </header>
    <section class="contet">
      <app-home></app-home>
    </section>
  </main>
`
```

5- Save the changes.


## Add features to `Home`

In this step you'll add a search filter and button thet is used in a later lesson. Gor now, that's all that `Home` has. 

In the **Editor**:

1- Open `home.ts`.
2- In `home.ts`, in `@component`, update the `template` property with this code.

```ts 
template: `
  <section>
    <form>
      <input type="text" placeholder="Filter by city" />
      <button class="primary" type="button">Search</button>
    </form>
  </section>
`,
```

3- Next, open `home.css` in the editor and update the content with styles

```css
.results {
  display: grid;
  column-gap: 14px;
  row-gap: 14px;
  grid-template-columns: repeat(auto-fill, minmax(400px, 400px));
  margin-top: 50px;
  justify-content: space-around;
}
input[type="text"] {
  border: solid 1px var(--primary-color);
  padding: 10px;
  border-radius: 8px;
  margin-right: 4px;
  display: inline-block;
  width: 30%;
}
button {
  padding: 10px;
  border: solid 1px var(--primary-color);
  background: var(--primary-color);
  color: white;
  border-radius: 8px;
}
@media (min-width: 500px) and (max-width: 768px) {
  .results {
      grid-template-columns: repeat(2, 1fr);
  }
  input[type="text"] {
      width: 70%;
  }   
}
@media (max-width: 499px) {
  .results {
      grid-template-columns: 1fr;
  }    
}
```

* **NOTE**: In a component, the css can go directly into the component in the meta style, or can go in a different file `.css`. Notice that depending onto what you choose, you will import the styles with different metadata. Like, the `styleUrls` or `style`.
