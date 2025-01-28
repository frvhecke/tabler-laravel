<x-layout.vertical>
  <x-page.header title="Alerts" />
  <x-page.body>
    <x-grid.row :cards="true">
      <x-grid.col lg="6">
        <x-card.card>
          <x-card.body>
            <x-card.title>Basic alerts</x-card.title>
            <x-card.text>Wrap any text and an optional dismiss button in .alert and one of the four contextual classes (e.g., <code>.alert-success</code>) for basic alert messages.</x-card.text>
            <x-alert.alert title="Wow! Everything worked!" />
            <x-alert.alert title="Uh oh, something went wrong" color="warning" />
            <x-alert.alert title="I'm so sorry..." color="danger" />
            <x-alert.alert title="Did you know?" color="info" />
          </x-card.body>
        </x-card.card>
      </x-grid.col>
      <x-grid.col lg="6">
        <x-card.card>
          <x-card.body>
            <x-card.title>Alerts with icon</x-card.title>
            <x-card.text>Build on any alert by adding an optional icon.</x-card.text>
            <x-alert.alert title="Wow! Everything worked!" icon="check" />
            <x-alert.alert title="Uh oh, something went wrong" color="warning" icon="alert-triangle" />
            <x-alert.alert title="I'm so sorry..." color="danger" icon="alert-circle" />
            <x-alert.alert title="Did you know?" color="info" icon="info-circle" />
          </x-card.body>
        </x-card.card>
      </x-grid.col>
      <x-grid.col lg="6">
        <x-card.card>
          <x-card.body>
            <x-card.title>Dismissible alerts</x-card.title>
            <x-card.text>Build on any alert by adding an optional <code>.alert-dismissible</code> and close button.</x-card.text>
            <x-alert.alert title="Wow! Everything worked!" icon="check" :dismissible="true" />
            <x-alert.alert title="Uh oh, something went wrong" color="warning" icon="alert-triangle" :dismissible="true" />
            <x-alert.alert title="I'm so sorry..." color="danger" icon="alert-circle" :dismissible="true" />
            <x-alert.alert title="Did you know?" color="info" icon="info-circle" :dismissible="true" />
          </x-card.body>
        </x-card.card>
      </x-grid.col>
      <x-grid.col lg="6">
        <x-card.card>
          <x-card.body>
            <x-card.title>Alert with a description</x-card.title>
            <x-card.text>Add a description to the alert to give more context.</x-card.text>
            <x-alert.alert title="This is a custom alert box!" description="Your account has been saved!" icon="check" />
            <x-alert.alert title="This is a custom alert box!" description="Sorry! There was a problem with your request." color="warning" icon="alert-triangle" />
            <x-alert.alert title="This is a custom alert box!" description="Something went wrong. Please try again." color="danger" icon="alert-circle" />
            <x-alert.alert title="This is a custom alert box!" description="Here is something that you might like to know." color="info" icon="info-circle" />
          </x-card.body>
        </x-card.card>
      </x-grid.col>
      <x-grid.col lg="6">
        <x-card.card>
          <x-card.body>
            <x-card.title>Important alerts</x-card.title>
            <x-alert.alert title="Wow! Everything worked!" :important="true" :dismissible="true" />
            <x-alert.alert title="Uh oh, something went wrong" color="warning" :important="true" :dismissible="true" />
            <x-alert.alert title="I'm so sorry..." color="danger" :important="true" :dismissible="true" />
            <x-alert.alert title="Did you know?" color="info" :important="true" :dismissible="true" />
          </x-card.body>
        </x-card.card>
      </x-grid.col>
  </x-grid.row>
</x-page.body>
</x-layout.vertical>