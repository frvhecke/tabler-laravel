<x-layout.vertical>
  <x-page.header title="Buttons" />
  <x-page.body>
    <x-grid.row :cards="true">
      <x-grid.col size="12">
        <x-card.card>
          <x-card.header title="Standard Buttons" />
          <x-card.body>
            <x-grid.row :center="true" :gutter="2">
              <x-grid.col :size="12" :xl="2" class="font-weight-semibold">
                Normal
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="primary" :fullwidth="true">
                  Primary
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="secondary" :fullwidth="true">
                  Secondary
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="success" :fullwidth="true">
                  Success
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="warning" :fullwidth="true">
                  Warning
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="danger" :fullwidth="true">
                  Danger
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="info" :fullwidth="true">
                  Info
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="dark" :fullwidth="true">
                  Dark
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="bg-dark py-3">
                <x-button.standard type="link" color="light" :fullwidth="true">
                  Light
                </x-button.standard>
              </x-grid.col>
            </x-grid.row>
            <x-grid.row :center="true" :gutter="2">
              <x-grid.col :size="12" :xl="2" class="font-weight-semibold">
                Active state
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="primary" :fullwidth="true" :active="true">
                  Primary
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="secondary" :fullwidth="true" :active="true">
                  Secondary
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="success" :fullwidth="true" :active="true">
                  Success
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="warning" :fullwidth="true" :active="true">
                  Warning
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="danger" :fullwidth="true" :active="true">
                  Danger
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="info" :fullwidth="true" :active="true">
                  Info
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="dark" :fullwidth="true" :active="true">
                  Dark
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="bg-dark py-3">
                <x-button.standard type="link" color="light" :fullwidth="true" :active="true">
                  Light
                </x-button.standard>
              </x-grid.col>
            </x-grid.row>
            <x-grid.row :center="true" :gutter="2">
              <x-grid.col :size="12" :xl="2" class="font-weight-semibold">
                Disabled
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="primary" :fullwidth="true" :disabled="true">
                  Primary
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="secondary" :fullwidth="true" :disabled="true">
                  Secondary
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="success" :fullwidth="true" :disabled="true">
                  Success
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="warning" :fullwidth="true" :disabled="true">
                  Warning
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="danger" :fullwidth="true" :disabled="true">
                  Danger
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="info" :fullwidth="true" :disabled="true">
                  Info
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.standard type="link" color="dark" :fullwidth="true" :disabled="true">
                  Dark
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="bg-dark py-3">
                <x-button.standard type="link" color="light" :fullwidth="true" :disabled="true">
                  Light
                </x-button.standard>
              </x-grid.col>
            </x-grid.row>
          </x-card.body>
        </x-card.card>
      </x-grid.col>
      <x-grid.col size="12">
        <x-card.card>
          <x-card.header title="Outline Buttons" />
          <x-card.body>
            <p>Use <code>.btn-outline-*</code> class for square buttons.</p>
            <x-grid.row :center="true" :gutter="2">
              <x-grid.col :size="12" :xl="2" class="font-weight-semibold">
                Normal
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="primary" :fullwidth="true">
                  Primary
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="secondary" :fullwidth="true">
                  Secondary
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="success" :fullwidth="true">
                  Success
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="warning" :fullwidth="true">
                  Warning
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="danger" :fullwidth="true">
                  Danger
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="info" :fullwidth="true">
                  Info
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="dark" :fullwidth="true">
                  Dark
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="bg-dark py-3">
                <x-button.outline type="link" color="light" :fullwidth="true">
                  Light
                </x-button.outline>
              </x-grid.col>
            </x-grid.row>
            <x-grid.row :center="true" :gutter="2">
              <x-grid.col :size="12" :xl="2" class="font-weight-semibold">
                Active state
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="primary" :fullwidth="true" :active="true">
                  Primary
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="secondary" :fullwidth="true" :active="true">
                  Secondary
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="success" :fullwidth="true" :active="true">
                  Success
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="warning" :fullwidth="true" :active="true">
                  Warning
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="danger" :fullwidth="true" :active="true">
                  Danger
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="info" :fullwidth="true" :active="true">
                  Info
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="dark" :fullwidth="true" :active="true">
                  Dark
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="bg-dark py-3">
                <x-button.outline type="link" color="light" :fullwidth="true" :active="true">
                  Light
                </x-button.outline>
              </x-grid.col>
            </x-grid.row>
            <x-grid.row :center="true" :gutter="2">
              <x-grid.col :size="12" :xl="2" class="font-weight-semibold">
                Disabled
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="primary" :fullwidth="true" :disabled="true">
                  Primary
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="secondary" :fullwidth="true" :disabled="true">
                  Secondary
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="success" :fullwidth="true" :disabled="true">
                  Success
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="warning" :fullwidth="true" :disabled="true">
                  Warning
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="danger" :fullwidth="true" :disabled="true">
                  Danger
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="info" :fullwidth="true" :disabled="true">
                  Info
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.outline type="link" color="dark" :fullwidth="true" :disabled="true">
                  Dark
                </x-button.outline>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="bg-dark py-3">
                <x-button.outline type="link" color="light" :fullwidth="true" :disabled="true">
                  Light
                </x-button.outline>
              </x-grid.col>
            </x-grid.row>
          </x-card.body>
        </x-card.card>
      </x-grid.col>
      <x-grid.col size="12">
        <x-card.card>
          <x-card.header title="Ghost Buttons" />
          <x-card.body>
            <p>Use <code>.btn-ghost-*</code> class for square buttons.</p>
            <x-grid.row :center="true" :gutter="2">
              <x-grid.col :size="12" :xl="2" class="font-weight-semibold">
                Normal
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="primary" :fullwidth="true">
                  Primary
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="secondary" :fullwidth="true">
                  Secondary
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="success" :fullwidth="true">
                  Success
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="warning" :fullwidth="true">
                  Warning
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="danger" :fullwidth="true">
                  Danger
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="info" :fullwidth="true">
                  Info
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="dark" :fullwidth="true">
                  Dark
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="bg-dark py-3">
                <x-button.ghost type="link" color="light" :fullwidth="true">
                  Light
                </x-button.ghost>
              </x-grid.col>
            </x-grid.row>
            <x-grid.row :center="true" :gutter="2">
              <x-grid.col :size="12" :xl="2" class="font-weight-semibold">
                Active state
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="primary" :fullwidth="true" :active="true">
                  Primary
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="secondary" :fullwidth="true" :active="true">
                  Secondary
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="success" :fullwidth="true" :active="true">
                  Success
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="warning" :fullwidth="true" :active="true">
                  Warning
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="danger" :fullwidth="true" :active="true">
                  Danger
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="info" :fullwidth="true" :active="true">
                  Info
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="dark" :fullwidth="true" :active="true">
                  Dark
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="bg-dark py-3">
                <x-button.ghost type="link" color="light" :fullwidth="true" :active="true">
                  Light
                </x-button.ghost>
              </x-grid.col>
            </x-grid.row>
            <x-grid.row :center="true" :gutter="2">
              <x-grid.col :size="12" :xl="2" class="font-weight-semibold">
                Disabled
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="primary" :fullwidth="true" :disabled="true">
                  Primary
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="secondary" :fullwidth="true" :disabled="true">
                  Secondary
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="success" :fullwidth="true" :disabled="true">
                  Success
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="warning" :fullwidth="true" :disabled="true">
                  Warning
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="danger" :fullwidth="true" :disabled="true">
                  Danger
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="info" :fullwidth="true" :disabled="true">
                  Info
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.ghost type="link" color="dark" :fullwidth="true" :disabled="true">
                  Dark
                </x-button.ghost>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="bg-dark py-3">
                <x-button.ghost type="link" color="light" :fullwidth="true" :disabled="true">
                  Light
                </x-button.ghost>
              </x-grid.col>
            </x-grid.row>
          </x-card.body>
        </x-card.card>
      </x-grid.col>
      <x-grid.col size="12">
        <x-card.card>
          <x-card.header title="Square Buttons" />
          <x-card.body>
            <p>Use <code>.btn-square</code> class for square buttons.</p>
            <x-grid.row :center="true" :gutter="2">
              <x-grid.col :size="12" :xl="2" class="font-weight-semibold">
                Normal
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.square type="link" color="primary" :fullwidth="true">
                  Primary
                </x-button.square>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.square type="link" color="secondary" :fullwidth="true">
                  Secondary
                </x-button.square>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.square type="link" color="success" :fullwidth="true">
                  Success
                </x-button.square>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.square type="link" color="warning" :fullwidth="true">
                  Warning
                </x-button.square>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.square type="link" color="danger" :fullwidth="true">
                  Danger
                </x-button.square>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.square type="link" color="info" :fullwidth="true">
                  Info
                </x-button.square>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.square type="link" color="dark" :fullwidth="true">
                  Dark
                </x-button.square>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="bg-dark py-3">
                <x-button.square type="link" color="light" :fullwidth="true">
                  Light
                </x-button.square>
              </x-grid.col>
            </x-grid.row>
          </x-card.body>
        </x-card.card>
      </x-grid.col>
      <x-grid.col size="12">
        <x-card.card>
          <x-card.header title="Pill Buttons" />
          <x-card.body>
            <p>Use <code>.btn-pill</code> class for pill buttons.</p>
            <x-grid.row :center="true" :gutter="2">
              <x-grid.col :size="12" :xl="2" class="font-weight-semibold">
                Normal
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.pill type="link" color="primary" :fullwidth="true">
                  Primary
                </x-button.pill>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.pill type="link" color="secondary" :fullwidth="true">
                  Secondary
                </x-button.pill>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.pill type="link" color="success" :fullwidth="true">
                  Success
                </x-button.pill>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.pill type="link" color="warning" :fullwidth="true">
                  Warning
                </x-button.pill>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.pill type="link" color="danger" :fullwidth="true">
                  Danger
                </x-button.pill>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.pill type="link" color="info" :fullwidth="true">
                  Info
                </x-button.pill>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="py-3">
                <x-button.pill type="link" color="dark" :fullwidth="true">
                  Dark
                </x-button.pill>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxl="true" class="bg-dark py-3">
                <x-button.pill type="link" color="light" :fullwidth="true">
                  Light
                </x-button.pill>
              </x-grid.col>
            </x-grid.row>
          </x-card.body>
        </x-card.card>
      </x-grid.col>
      <x-grid.col size="12">
        <x-card.card>
          <x-card.header title="Extra colors" />
          <x-card.body>
            <x-grid.row :center="true" :gutter="2">
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="blue" :fullwidth="true">
                  Blue
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="azure" :fullwidth="true">
                  Azure
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="indigo" :fullwidth="true">
                  Indigo
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="purple" :fullwidth="true">
                  Purple
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="pink" :fullwidth="true">
                  Pink
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="red" :fullwidth="true">
                  Red
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="orange" :fullwidth="true">
                  Orange
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="yellow" :fullwidth="true">
                  Yellow
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="lime" :fullwidth="true">
                  Lime
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="green" :fullwidth="true">
                  Green
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="teal" :fullwidth="true">
                  Teal
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="cyan" :fullwidth="true">
                  Cyan
                </x-button.standard>
              </x-grid.col>
            </x-grid.row>
          </x-card.body>
        </x-card.card>
      </x-grid.col>
      <x-grid.col size="12">
        <x-card.card>
          <x-card.header title="Icon buttons" />
          <x-card.body>
            <x-grid.row :center="true" :gutter="2">
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="facebook" :fullwidth="true">
                  <span style="font-size:1rem"><x-icon.tabler icon="brand-facebook"/></span>
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="twitter" :fullwidth="true">
                  <x-icon.tabler icon="brand-twitter"/>
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="google" :fullwidth="true">
                  <x-icon.tabler icon="brand-google-filled"/>
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="youtube" :fullwidth="true">
                  <x-icon.tabler icon="brand-youtube"/>
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="vimeo" :fullwidth="true">
                  <x-icon.tabler icon="brand-vimeo"/>
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="dribbble" :fullwidth="true">
                  <x-icon.tabler icon="brand-dribbble"/>
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="github" :fullwidth="true">
                  <x-icon.tabler icon="brand-github"/>
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="instagram" :fullwidth="true">
                  <x-icon.tabler icon="brand-instagram"/>
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="pinterest" :fullwidth="true">
                  <x-icon.tabler icon="brand-pinterest"/>
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="vk" :fullwidth="true">
                  <x-icon.tabler icon="brand-vk"/>
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="rss" :fullwidth="true">
                  <x-icon.tabler icon="rss"/>
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="flickr" :fullwidth="true">
                  <x-icon.tabler icon="brand-flickr"/>
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="bitbucket" :fullwidth="true">
                  <x-icon.tabler icon="brand-bitbucket"/>
                </x-button.standard>
              </x-grid.col>
              <x-grid.col :size="6" :sm="4" :md="2" :colxlauto="true" class="py-3">
                <x-button.standard type="link" color="tabler" :fullwidth="true" arialabel="Tabler">
                  <x-icon.tabler icon="brand-tabler"/>
                </x-button.standard>
              </x-grid.col>
            </x-grid.row>
          </x-card.body>
        </x-card.card>
      </x-grid.col>
    </x-grid.row>
  </x-page.body>
</x-layout.vertical>